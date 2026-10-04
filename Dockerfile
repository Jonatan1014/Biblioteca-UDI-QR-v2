# PHP 8.2 coincide con la versión indicada en el README (XAMPP 8.2)
FROM php:8.2-apache

# pdo_mysql es el driver que usa conn.php; mysqli lo usa action/search_book.php
RUN docker-php-ext-install pdo_mysql mysqli \
    && mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
