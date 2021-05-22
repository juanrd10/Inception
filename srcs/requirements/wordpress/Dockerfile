FROM debian:buster

COPY ./conf/nginx_alv /etc/nginx/sites-available/
COPY ./conf/wp-config.php /

RUN apt -y update && \
	apt -y install nginx wget php-cgi php-common php-fpm php-pear php-mbstring php-zip php-net-socket php-gd php-xml-util php-gettext php-mysql php-bcmath && \
	apt -y upgrade ;\
	wget https://es.wordpress.org/latest-es_ES.tar.gz && \
	tar xvf latest-es_ES.tar.gz ; \
	rm -rf latest-es_ES.tar.gz ; \
	rm -rf /etc/nginx/sites-enabled/default && \
	ln -fs /etc/nginx/sites-available/nginx_alv /etc/nginx/sites-enabled/

EXPOSE 80 443

CMD chmod -R 755 /Users/juanrodr/* ; \
	service php7.3-fpm start ; \
	cp -rf wordpress/ /home/juanrodr/data/wp/ ; \
	rm -rf wordpress ; \
	mv /wp-config.php /home/juanrodr/data/wp/wordpress/ ; \
	service nginx start; \
	bash

