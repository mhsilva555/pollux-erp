FROM phpdockerio/php:8.4-fpm
WORKDIR "/application"

RUN apt-get update \
    && apt-get -y --no-install-recommends install \
        php8.4-gd \
        php8.4-imagick \
        php8.4-mcrypt \
        php8.4-memcached \
        php8.4-mysql \
        php8.4-oauth \
        php8.4-odbc \
        php8.4-pgsql \
        php8.4-pq \
        php8.4-redis \
        php8.4-sqlite3 \
        php8.4-uploadprogress \
        php8.4-xdebug \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
