# Global settings
ARG PHP_VERSION=7.4
ARG NGINX_VERSION=1.17

FROM php:${PHP_VERSION}-fpm-alpine3.10 AS he_uk_php

# persistent / runtime deps
RUN apk add --no-cache \
        acl \
        file \
        gettext \
        git \
        mariadb-client \
    ;
ENV ALPINE_VERSION=3.10
ENV IMAGICK_VERSION=3.4.3
ENV MONGODB_VERSION=1.6.1
# Install & clean up dependencies
RUN apk --no-cache --update --repository http://dl-cdn.alpinelinux.org/alpine/v$ALPINE_VERSION/main/ add \
    autoconf \
    build-base \
    ca-certificates \
&& apk --no-cache --update --repository http://dl-3.alpinelinux.org/alpine/v3.5/main/ add \
    curl \
    openssl \
    openssl-dev \
    libtool \
    icu \
    icu-libs \
    icu-dev \
    libwebp \
    libpng \
    libpng-dev \
    libjpeg-turbo \
    libjpeg-turbo-dev \
    imagemagick-dev \
    imagemagick \
&& apk --no-cache --update --repository http://dl-3.alpinelinux.org/alpine/v3.5/community/ add \
    php7-gd \
    php7-sockets \
    php7-zlib \
    php7-intl \
    php7-opcache \
    php7-bcmath \
&& docker-php-ext-configure intl \
&& pecl install \
    imagick-$IMAGICK_VERSION \
    # amqp-$AMQP_VERSION \
    mongodb-$MONGODB_VERSION \
&& docker-php-ext-install \
    pdo_mysql \
    sockets \
    gd \
    intl \
    opcache \
    bcmath \
&& docker-php-ext-enable \
    imagick \
    # amqp \
    mongodb \
&& apk --no-cache del \
    wget \
    icu-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    imagemagick-dev \
    tar \
    autoconf \
    build-base \
    libtool \
&& rm -rf /var/cache/apk/* /tmp/*

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY docker/php-fpm/php.ini /usr/local/etc/php/php.ini
COPY docker/php-fpm/php-cli.ini /usr/local/etc/php/php-cli.ini
COPY docker/php-fpm/zz-docker.conf /usr/local/etc/php-fpm.d/zzz-docker.conf

#RUN sed -i 's/9000/3001/' /usr/local/etc/php-fpm.d/zz-docker.conf

# https://getcomposer.org/doc/03-cli.md#composer-allow-superuser
ENV COMPOSER_ALLOW_SUPERUSER=1
ENV PATH="${PATH}:/root/.composer/vendor/bin"

WORKDIR /var/www/application

# build for production
ARG APP_ENV=production

# copy everything, excluding the one from .dockerignore file
COPY . ./

RUN set -eux; \
    mkdir -p storage/logs storage/framework bootstrap/cache; \
    composer install --prefer-dist --no-progress --no-suggest --optimize-autoloader; \
    composer clear-cache

COPY docker/php-fpm/docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["php-fpm"]

# NGINX
FROM nginx:${NGINX_VERSION}-alpine AS he_uk_nginx

COPY docker/nginx/conf.d/default.conf /etc/nginx/conf.d/

WORKDIR /var/www/application

COPY --from=he_uk_php /var/www/application/public public/
