FROM php:7.1-fpm-alpine

RUN docker-php-ext-install -j$(nproc) pdo_mysql calendar zip
