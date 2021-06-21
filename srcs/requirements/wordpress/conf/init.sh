#!/bin/bash
DIR="/var/www/html/wordpress/wp-content"
chown -R www-data:www-data /var/www/html/wordpress
if [ ! -d "$DIR" ]; then
mv /resources/wordpress/* /var/www/html/wordpress/
fi
rm -rf /resources/wordpress
php-fpm7.3 -F
