FROM php:8.2-apache

WORKDIR /var/www/html

COPY src/ .

EXPOSE 80

# Включаем mod_rewrite для Apache
RUN a2enmod rewrite 