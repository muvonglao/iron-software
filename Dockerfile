FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    git unzip libicu-dev \
 && docker-php-ext-install intl \
 && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist --no-interaction --optimize-autoloader

COPY . .

CMD ["sh", "-c", "php -S 0.0.0.0:${PORT} -t public"]