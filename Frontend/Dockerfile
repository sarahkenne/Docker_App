FROM php:8.0-apache
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN apt-get update && \
    apt-get install -y \
        libpq-dev \
        && \
    rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install pdo pdo_mysql
RUN apt-get update && apt-get install -y git
RUN git clone https://github.com/sarahkenne/Docker_App.git
WORKDIR /var/www/html
COPY index.php validation.php ./
EXPOSE 80
