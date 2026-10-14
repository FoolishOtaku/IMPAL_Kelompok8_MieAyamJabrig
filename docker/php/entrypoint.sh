#!/bin/sh
# Self-bootstrapping entrypoint for the Laravel container. Every step is idempotent.
set -e

cd /var/www/html

log() { echo "[entrypoint] $*"; }

# Only bootstrap when starting php-fpm (so `docker compose exec app php ...` stays untouched)
if [ "$1" = "php-fpm" ]; then

  # 1. .env
  if [ ! -f .env ] && [ -f .env.example ]; then
    log "creating .env from .env.example"
    cp .env.example .env
  fi

  # 2. Composer dependencies (dev: vendor/ is hidden by the bind mount)
  if [ ! -d vendor ] || [ ! -f vendor/autoload.php ]; then
    log "installing composer dependencies"
    composer install --no-interaction --prefer-dist
  fi

  # 3. App key
  if [ -f .env ] && ! grep -Eq '^APP_KEY=.+' .env; then
    log "generating APP_KEY"
    php artisan key:generate --force --no-interaction
  fi

  # 4. Writable directories
  mkdir -p storage/framework/cache/data storage/framework/sessions storage/framework/views \
           storage/app/public storage/logs bootstrap/cache
  chown -R www-data:www-data storage bootstrap/cache 2>/dev/null || true

  # 5. Public storage link
  if [ ! -e public/storage ]; then
    log "linking public storage"
    php artisan storage:link --no-interaction || true
  fi

  # 6. Optional auto-migrate (waits for the database first)
  if [ "${AUTO_MIGRATE:-false}" = "true" ]; then
    log "waiting for database ${DB_HOST:-db}"
    tries=0
    until mariadb-admin ping -h"${DB_HOST:-db}" -u"${DB_USERNAME}" -p"${DB_PASSWORD}" --silent 2>/dev/null; do
      tries=$((tries + 1))
      if [ "$tries" -ge 30 ]; then
        log "database not reachable after 60s, skipping migrate"
        break
      fi
      sleep 2
    done
    if [ "$tries" -lt 30 ]; then
      log "running migrations"
      php artisan migrate --force --no-interaction
    fi
  fi

  # 7. Production caches
  if [ "${APP_ENV}" = "production" ]; then
    log "caching config, routes and views"
    php artisan config:cache --no-interaction
    php artisan route:cache --no-interaction
    php artisan view:cache --no-interaction
  fi
fi

exec "$@"
