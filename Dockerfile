FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    git \
    curl \
    libzip-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql pgsql

# instalar composer
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

WORKDIR /var/www

COPY . .

# instalar dependencias laravel y limpiar cache
RUN composer install --no-dev --optimize-autoloader \
    && php artisan config:clear \
    && php artisan cache:clear \
    && php artisan config:cache \
    && php artisan route:clear \
    && php artisan view:clear

# servidor http para render
CMD php -S 0.0.0.0:$PORT -t public