FROM php:8.0.9-fpm-alpine3.14
ARG UID
RUN apk --update add shadow
RUN usermod -u $UID www-data && groupmod -g $UID www-data
RUN apk --update add sudo
RUN echo "www-data ALL=(ALL) NOPASSWD: ALL" >> /etc/sudoers
RUN apk --update add composer
RUN docker-php-ext-install pdo_mysql
RUN apk add --update npm
RUN apk add --update make
RUN apk add --no-cache \
	$PHPIZE_DEPS

#RUN pecl install swoole

#RUN docker-php-ext-enable swoole

#RUN docker-php-ext-install pcntl

EXPOSE 8000

# ENTRYPOINT php artisan octane:start --host 0.0.0.0 --watch

# ENTRYPOINT tail -f /dev/null

ENTRYPOINT php artisan serve --host 0.0.0.0

COPY ./fs/app/ /
