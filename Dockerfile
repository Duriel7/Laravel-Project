FROM php:8.3-cli

RUN apt-get update && apt-get install -y \
    git curl zip unzip libzip-dev libonig-dev libxml2-dev \
    libsqlite3-dev sqlite3 \
    libicu-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_sqlite pcntl intl exif zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY .docker/php.ini /usr/local/etc/php/conf.d/custom.ini

