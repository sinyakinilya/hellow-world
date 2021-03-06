FROM php:7.1-fpm

RUN apt-get update && apt-get install -my zip unzip nginx git supervisor cron\
 && docker-php-ext-install mysqli pdo pdo_mysql bcmath sockets\
 && pecl install amqp\
 && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /var/www/project

WORKDIR /var/www/project

RUN cp .build/prod/nginx.conf /etc/nginx/sites-enabled/default\
 && composer install
