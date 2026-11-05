FROM php:8.3

WORKDIR /app

COPY . /app

RUN composer install --no-dev --optimize-autoloader

CMD ["sh", "-c", "php -S 0.0.0.0:${PORT} -t /app/public"]