FROM php:7.4-fpm
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git redis-server

RUN pecl install redis && docker-php-ext-enable redis
