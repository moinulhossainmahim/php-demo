FROM php:7.4-cli

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    zip \
    unzip \
    curl \
    vim \
    git \
    && docker-php-ext-install pdo pdo_mysql

RUN apt-get install -y entr

COPY . /usr/src/myapp

WORKDIR /usr/src/myapp

EXPOSE 8000

CMD ls -d /usr/src/myapp/* | entr -r php -S 0.0.0.0:8000 -t public
