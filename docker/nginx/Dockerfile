# syntax=docker/dockerfile:1
# Build context: repository root. Bakes the built public/ folder into the image
# so a rebuild always serves fresh assets (no shared volume to clear).

FROM node:22-alpine AS assets
WORKDIR /app
COPY src/package*.json ./
RUN npm ci
COPY src/ ./
RUN npm run build

FROM nginx:alpine
COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf
COPY --from=assets /app/public /var/www/html/public
