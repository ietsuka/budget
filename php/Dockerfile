FROM php:7.2-fpm
COPY php.ini /usr/local/etc/php/

RUN apt-get update && apt-get install -y git zip unzip

RUN apt-get update \
  && docker-php-ext-install pdo_mysql

#Composer install
COPY --from=composer /usr/bin/composer /usr/bin/composer
ENV COMPOSER_HOME /root/.composer
RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1

ENV COMPOSER_HOME /composer

ENV PATH $PATH:/composer/vendor/bin

WORKDIR /var/www/html

RUN composer global require "laravel/installer"