# PHP 8.2 coincide con la versión indicada en el README (XAMPP 8.2)
FROM php:8.2-apache

# pdo_mysql es el driver que usa conn.php; mysqli lo usa action/search_book.php
# gd genera y redimensiona las imágenes (portadas y códigos QR)
RUN apt-get update \
    && apt-get install -y --no-install-recommends libpng-dev libjpeg62-turbo-dev libwebp-dev \
    && docker-php-ext-configure gd --with-jpeg --with-webp \
    && docker-php-ext-install -j"$(nproc)" gd pdo_mysql mysqli \
    && rm -rf /var/lib/apt/lists/* \
    && mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
