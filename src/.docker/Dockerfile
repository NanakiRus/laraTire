FROM php:fpm-alpine

WORKDIR /tire

ARG GITHUB_TOKEN

COPY ./.docker/makeconfig.conf /usr/local/etc/php-fpm.d/makeconfig.conf
COPY ./.docker/entrypoint.sh /entrypoint.sh

RUN set -xe \
    && apk update \
    && apk upgrade \
    && apk add --no-cache autoconf \
        openssl \
        g++ \
        make \
        git \
        curl \
        curl-dev \
        icu-dev \
        netcat-openbsd \
        freetype-dev \
        libpng-dev \
        libjpeg-turbo-dev \
    && apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/edge/main libuv \
    && apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/edge/main nodejs-npm \
    && pecl install xdebug redis \
    && docker-php-ext-enable xdebug redis \
    && docker-php-source delete \
    && docker-php-ext-configure gd \
        --with-gd \
        --with-freetype-dir=/usr/include/ \
        --with-png-dir=/usr/include/ \
        --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install \
        curl \
        pdo_mysql \
        mysqli \
        intl \
        gd \
        zip \
    && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_autostart=on" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_connect_back=on" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_port=9001" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_handler=dbgp" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_connect_back=0" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_host=localhost" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.idekey=\"PHPSTORM\"" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && composer config -g github-oauth.github.com $GITHUB_TOKEN \
    && composer global require hirak/prestissimo \
    && mkdir /var/log/php-fpm

ENTRYPOINT chmod +x /entrypoint.sh && sh /entrypoint.sh