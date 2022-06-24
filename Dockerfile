FROM php:7.4-apache

RUN apt-get update \
    && apt-get install --no-install-recommends -y git unzip

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

COPY . /usr/src/myapp

WORKDIR /usr/src/myapp
