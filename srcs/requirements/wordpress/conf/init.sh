#!/bin/bash

chown -R www-data:www-data /var/www/html/wordpress
mv /resources/wordpress/* /var/www/html/wordpress/
rm -rf /resources/wordpress
service php7.3-fpm start
bash
