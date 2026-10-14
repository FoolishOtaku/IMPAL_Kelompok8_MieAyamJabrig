#!/usr/bin/env bash
# One-time setup for the NixOS server (safe to re-run; idempotent).
#  - generates .env with random DB secrets
#  - sets server-only variables (host bind paths, skips the dev override)
#  - creates host data directories
#  - builds and starts the stack
set -euo pipefail
cd "$(dirname "$0")"

DATA_ROOT="${LMS_DATA_ROOT:-/var/lib/lms}"
rand() { head -c 48 /dev/urandom | base64 | tr -dc 'A-Za-z0-9' | head -c 24; }

command -v docker >/dev/null || { echo "Docker not found. Enable virtualisation.docker in NixOS first."; exit 1; }
docker info >/dev/null 2>&1 || { echo "Docker daemon not reachable (check docker group / service)."; exit 1; }

if [ ! -f .env ]; then
  echo "Creating .env with generated database passwords..."
  cp .env.example .env
  sed -i "s|^# DB_PASSWORD=.*|DB_PASSWORD=$(rand)|" .env
  sed -i "s|^# DB_ROOT_PASSWORD=.*|DB_ROOT_PASSWORD=$(rand)|" .env
  sed -i "s|^# COMPOSE_FILE=.*|COMPOSE_FILE=docker-compose.yml|" .env
  sed -i "s|^# DB_DATA_PATH=.*|DB_DATA_PATH=${DATA_ROOT}/mariadb|" .env
  sed -i "s|^# STORAGE_PATH=.*|STORAGE_PATH=${DATA_ROOT}/storage|" .env
  chmod 600 .env
else
  echo ".env already exists, keeping it."
fi

# Host data directories (the NixOS module's tmpfiles rules also create these)
for d in mariadb storage backups; do
  if [ ! -d "${DATA_ROOT}/${d}" ]; then
    mkdir -p "${DATA_ROOT}/${d}" 2>/dev/null || sudo mkdir -p "${DATA_ROOT}/${d}"
  fi
done

echo "Building and starting the stack..."
docker compose up -d --build

PORT="$(grep -E '^WEB_PORT=' .env | cut -d= -f2 || true)"; PORT="${PORT:-8080}"
echo "Waiting for http://localhost:${PORT} ..."
for _ in $(seq 1 60); do
  if curl -fsS -o /dev/null "http://localhost:${PORT}"; then echo "Ready: http://localhost:${PORT}"; exit 0; fi
  sleep 3
done
echo "Not answering yet. Check logs: docker compose logs -f app"
exit 1
