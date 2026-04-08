FROM php:8.3-fpm

WORKDIR /var/www/html
COPY index.php /var/www/html/index.php

# forza php-fpm su TCP 9000
RUN sed -i 's|^listen = .*|listen = 9000|' /usr/local/etc/php-fpm.d/www.conf
