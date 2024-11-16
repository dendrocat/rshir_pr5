FROM php:8.2-apache

RUN apt-get update && apt-get install -y libzip-dev \
    && docker-php-ext-install mysqli

RUN pecl install redis && docker-php-ext-enable redis

RUN a2enmod authz_groupfile

EXPOSE 80

CMD ["apachectl", "-D", "FOREGROUND"]