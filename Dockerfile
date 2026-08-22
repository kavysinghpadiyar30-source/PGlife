FROM php:8.2-apache

# MySQL database connect karne ke liye zaruri extensions install karein
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Project ki saari files ko web server me copy karein
COPY . /var/www/html/

# Apache mod_rewrite enable karein (Clean URLs/routing ke liye)
RUN a2enmod rewrite

# Port 80 expose karein
EXPOSE 80
