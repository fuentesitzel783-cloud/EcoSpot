FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    unzip git curl libzip-dev default-mysql-client \
    && docker-php-ext-install pdo pdo_mysql

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install --no-dev --optimize-autoloader

CMD php artisan config:clear && \
    php artisan migrate --force && \
    php -S 0.0.0.0:$PORT -t public