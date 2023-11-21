FROM php:8.0-apache

RUN apt-get update && apt-get install -y \
    libpq-dev \
    sqlite3 \
    zlib1g-dev \
    libzip-dev

COPY . /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
