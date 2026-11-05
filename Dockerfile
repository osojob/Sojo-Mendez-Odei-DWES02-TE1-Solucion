FROM php:8.3

WORKDIR /app

COPY . /app

CMD ["sh", "-c", "php -S 0.0.0.0:${PORT} -t /app/public"]