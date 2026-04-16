FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    git \
    curl \
    libzip-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql pgsql

# instalar composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install --no-dev --optimize-autoloader

CMD php artisan config:clear && \
    php artisan cache:clear && \
    php -S 0.0.0.0:$PORT -t public