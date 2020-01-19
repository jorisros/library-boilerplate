FROM php:7.3-fpm

# Install git
RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git

# Install zip
RUN apt install zip unzip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer