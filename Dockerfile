FROM php:7.4-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y
COPY /app/ /var/www/html
EXPOSE 80
# WORKDIR /usr/src/myapp
# CMD [ "php", "./your-script.php" ]

