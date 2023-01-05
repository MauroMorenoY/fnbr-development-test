FROM php:7.2-apache

# now with everything ready we can create out php-app container
# this a dev container no code is needed
WORKDIR /app
COPY /src /var/www/html/

#expose the ports
EXPOSE 80
