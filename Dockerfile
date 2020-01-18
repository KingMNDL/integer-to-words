FROM php:7.1.3-fpm

WORKDIR /var/www/html

RUN apt-get update && \
        apt-get install -y --no-install-recommends git zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
