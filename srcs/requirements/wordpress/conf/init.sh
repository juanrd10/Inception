chown -R www-data:www-data /var/www/wordpress
mv /resources/wordpress/* /var/www/wordpress/ ; \
rm -rf /resources/wordpress ; \
service php7.3-fpm start
bash
