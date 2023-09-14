FROM php:8.1-apache

USER root

COPY 000-default.conf /etc/apache2/sites-available/

RUN apt-get update --fix-missing && apt-get install -y unzip libzip-dev sqlite3 zip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN a2enmod rewrite

EXPOSE 80
