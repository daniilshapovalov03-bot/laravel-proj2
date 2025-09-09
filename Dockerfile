FROM php:8.2-fpm

WORKDIR /var/www/html

# ОБНОВЛЕННЫЙ БЛОК - МЫ ДОБАВЛЯЕМ Node.js и npm
RUN apt-get update && apt-get install -y \
    nodejs \
    npm \
    libpq-dev \
    git \
    zip \
    unzip \
    && docker-php-ext-install pdo pdo_pgsql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN chown -R www-data:www-data /var/www/html
