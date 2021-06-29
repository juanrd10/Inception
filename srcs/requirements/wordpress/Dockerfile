FROM debian:buster

COPY ./conf/init.sh /resources/

RUN apt -y update && \
	apt -y install wget php7.3-cgi php7.3-common php7.3-fpm php-pear php7.3-mbstring php7.3-zip php-net-socket php7.3-gd php-xml-util php7.3-gettext php7.3-mysql php7.3-bcmath && \
	apt -y install && \
	apt -y upgrade

RUN wget https://es.wordpress.org/latest-es_ES.tar.gz && \
	wget https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1.php && \
	tar -xvzf latest-es_ES.tar.gz ; \
	apt -y remove wget ; \
	rm -rf latest-es_ES.tar.gz ; \
	mv wordpress /resources/ && \
	mkdir /resources/wordpress/adminer/ && \
	mv adminer-4.8.1.php /resources/wordpress/adminer/

RUN sed -i 's|listen = /run/php/php7.3-fpm.sock|listen = wordpress:9000|g' /etc/php/7.3/fpm/pool.d/www.conf
RUN sed -i 's|listen.allowed_clients = 127.0.0.1|listen.allowed_clients = 0.0.0.0|g' /etc/php/7.3/fpm/pool.d/www.conf

COPY ./conf/wp-config.php /resources/wordpress/

RUN chmod 777 /resources/init.sh
RUN mkdir /var/run/php

ENTRYPOINT /resources/init.sh

