FROM php:7.2-fpm

RUN apt-get update

# Some basic extensions
RUN docker-php-ext-install -j$(nproc) json mbstring pdo pdo_mysql mysqli

# Curl
RUN apt-get install -y libcurl4-openssl-dev zip unzip
RUN docker-php-ext-install -j$(nproc) curl
