FROM php:8.1.4

RUN apt-get update && apt-get install -y autoconf libmcrypt-dev pkg-config apt-utils git vim openssl zip libssl-dev unzip\
 && apt-get install vim && docker-php-ext-install pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ENV COMPOSER_ALLOW_SUPERUSER=1

COPY . /usr/src/myapp

WORKDIR /usr/src/myapp
