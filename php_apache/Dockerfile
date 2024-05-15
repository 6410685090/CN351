FROM php:8.1.1-apache

RUN apt-get update \
    && apt-get install -y --no-install-recommends iputils-ping \
    && docker-php-ext-install mysqli \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

USER www-data
