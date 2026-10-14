# syntax=docker/dockerfile:1
# Build context: repository root (see docker-compose.yml)

# --- Stage 1: PHP dependencies ---
FROM composer:2 AS vendor
WORKDIR /app
COPY src/composer.json src/composer.lock ./
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist --no-interaction

# --- Stage 2: frontend assets (Vite) ---
FROM node:22-alpine AS assets
WORKDIR /app
COPY src/package*.json ./
RUN npm ci
COPY src/ ./
RUN npm run build

# --- Stage 3: shared PHP runtime ---
FROM php:8.4-fpm-alpine AS base
RUN apk add --no-cache libzip-dev icu-dev libpng-dev libjpeg-turbo-dev freetype-dev mariadb-client \
 && docker-php-ext-configure gd --with-freetype --with-jpeg \
 && docker-php-ext-install -j"$(nproc)" pdo_mysql bcmath intl zip gd opcache
COPY docker/php/php.ini /usr/local/etc/php/conf.d/lms.ini
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
WORKDIR /var/www/html
COPY docker/php/entrypoint.sh /entrypoint.sh
# strip Windows line endings so a CRLF checkout can never break the script
RUN sed -i 's/\r$//' /entrypoint.sh && chmod +x /entrypoint.sh
ENTRYPOINT ["/entrypoint.sh"]
CMD ["php-fpm"]

# --- dev target: code comes from a bind mount, deps installed by the entrypoint ---
FROM base AS dev

# --- prod target: everything baked into the image ---
FROM base AS prod
COPY src/ ./
COPY --from=vendor /app/vendor ./vendor
COPY --from=assets /app/public/build ./public/build
RUN composer dump-autoload --optimize --no-dev \
 && chown -R www-data:www-data storage bootstrap/cache
