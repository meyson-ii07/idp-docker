FROM php:8.1-fpm

RUN docker-php-ext-install mysqli
RUN apt-get update && apt-get install -y \
    autoconf \
    gcc \
    g++ \
    make \
    && pecl install redis && docker-php-ext-enable redis \
    && apt-get clean && rm -rf /var/lib/apt/lists/*