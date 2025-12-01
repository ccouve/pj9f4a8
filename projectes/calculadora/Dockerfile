# Imatge base a partir de la qual crearem la nostra
FROM php:8.4-apache 
# Directori per defecte de treball
WORKDIR /var/www/html
# Copia la carpeta app dins "." de contenidor, a on "." és el WORKDIR
COPY app .
# Exposa el port 80 del contenidor  
EXPOSE 80
# Incorporació del framework de tests de funcionament PHPUnit versió 12
RUN apt-get -y update
RUN apt-get -y install zip unzip curl
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer require --dev phpunit/phpunit ^12
