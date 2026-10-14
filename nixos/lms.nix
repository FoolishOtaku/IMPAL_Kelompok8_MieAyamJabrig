{ pkgs, ... }:

# Optional NixOS module for the LMS server. Import it from configuration.nix:
#   imports = [ /opt/lms/nixos/lms.nix ];
# Adjust `repoDir` if the repository is cloned somewhere else.
let
  repoDir  = "/opt/lms";
  dataRoot = "/var/lib/lms";
in {
  virtualisation.docker.enable = true;

  # HTTP/HTTPS reach your reverse proxy; the app itself listens on WEB_PORT (default 8080)
  networking.firewall.allowedTCPPorts = [ 80 443 ];

  # Create host data dirs on every boot
  systemd.tmpfiles.rules = [
    "d ${dataRoot}/mariadb 0750 root root -"
    "d ${dataRoot}/storage 0755 root root -"
    "d ${dataRoot}/backups 0750 root root -"
  ];

  # Start the stack on boot (containers also use restart: unless-stopped)
  systemd.services.lms = {
    description = "CeLOE LMS docker compose stack";
    wantedBy = [ "multi-user.target" ];
    after = [ "docker.service" "network-online.target" ];
    requires = [ "docker.service" ];
    serviceConfig = {
      Type = "oneshot";
      RemainAfterExit = true;
      WorkingDirectory = repoDir;
      ExecStart = "${pkgs.docker}/bin/docker compose up -d --build";
      ExecStop  = "${pkgs.docker}/bin/docker compose stop";
    };
  };

  # Nightly database backup, keep 7 days
  systemd.timers.lms-backup = {
    wantedBy = [ "timers.target" ];
    timerConfig = { OnCalendar = "daily"; Persistent = true; };
  };
  systemd.services.lms-backup = {
    description = "CeLOE LMS nightly database backup";
    path = [ pkgs.docker pkgs.gzip pkgs.findutils pkgs.coreutils ];
    serviceConfig = { Type = "oneshot"; WorkingDirectory = repoDir; };
    script = ''
      docker compose exec -T db sh -c \
        'mariadb-dump -uroot -p"$MARIADB_ROOT_PASSWORD" --all-databases' \
        | gzip > ${dataRoot}/backups/lms-$(date +%F).sql.gz
      find ${dataRoot}/backups -name 'lms-*.sql.gz' -mtime +7 -delete
    '';
  };
}
