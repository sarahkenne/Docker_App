FROM php:8.0-apache
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN a2enmod rewrite
WORKDIR /var/www/html
RUN apt-get update && \
    apt-get install -y \
        libpq-dev \
        && \
    rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install pdo pdo_mysql
RUN apt-get update && apt-get install -y git
RUN git clone https://github.com/sarahkenne/Docker_App.git 
RUN mv Docker_App/* /var/www/html
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
EXPOSE 80
CMD ["apache2-foreground"]
    