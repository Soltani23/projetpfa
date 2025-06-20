FROM php:8.1-apache

RUN docker-php-ext-install pdo pdo_mysql

# Activer mod_rewrite si nécessaire
RUN a2enmod rewrite

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
