FROM php:7.4-fpm

# Arguments defined in docker-compose.yml
ARG user
ARG uid

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Set working directory
WORKDIR /var/www

USER $user
