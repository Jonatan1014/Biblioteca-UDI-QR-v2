# Contexto de build: raíz del repositorio (no barrancabermeja/).
# La app vive en barrancabermeja/ y la raíz redirige a ella (index.php).
# PHP 8.2 coincide con la versión indicada en el README (XAMPP 8.2)
FROM php:8.2-apache

# pdo_mysql es el driver que usa conn.php; mysqli lo usa action/search_book.php
# gd genera y redimensiona las imágenes (portadas y códigos QR); unzip lo usa Composer
RUN apt-get update \
    && apt-get install -y --no-install-recommends libpng-dev libjpeg62-turbo-dev libwebp-dev unzip \
    && docker-php-ext-configure gd --with-jpeg --with-webp \
    && docker-php-ext-install -j"$(nproc)" gd pdo_mysql mysqli \
    && rm -rf /var/lib/apt/lists/* \
    && mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Composer instala endroid/qr-code (vendor/ no está en Git)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html/barrancabermeja

# Dependencias primero (capa cacheable)
COPY barrancabermeja/composer.json barrancabermeja/composer.lock ./
RUN composer install --no-dev --no-interaction --no-progress --optimize-autoloader

COPY barrancabermeja/ ./
COPY index.php /var/www/html/index.php

RUN chown -R www-data:www-data /var/www/html

# Bloquea por HTTP las clases, dependencias, la base de datos (SQL) y los archivos de Composer
RUN { \
        echo '<DirectoryMatch "^/var/www/html/barrancabermeja/(includes|vendor)">'; \
        echo '    Require all denied'; \
        echo '</DirectoryMatch>'; \
        echo '<FilesMatch "^(composer\.(json|lock)|.*\.sql)$">'; \
        echo '    Require all denied'; \
        echo '</FilesMatch>'; \
    } > /etc/apache2/conf-available/bloqueos.conf \
    && a2enconf bloqueos

EXPOSE 80
