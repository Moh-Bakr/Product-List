FROM php:7.3.0-apache

COPY src/ /var/www/html

RUN apt-get update && apt-get upgrade -y --allow-unauthenticated

RUN docker-php-ext-install mysqli

ARG port=80


EXPOSE $port