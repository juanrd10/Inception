FROM debian:buster

COPY ./conf/init.sh /resources/

RUN apt -y update && \
	apt -y install wget php7.3-cgi php7.3-common php7.3-fpm php-pear php7.3-mbstring php7.3-zip php-net-socket php7.3-gd php-xml-util php7.3-gettext php7.3-mysql php7.3-bcmath && \
	apt -y upgrade

RUN wget https://es.wordpress.org/latest-es_ES.tar.gz && \
	tar -xvzf latest-es_ES.tar.gz ; \
	rm -rf latest-es_ES.tar.gz ; \
	mv wordpress /resources/

COPY ./conf/wp-config.php /resources/wordpress/

RUN chmod 777 /resources/init.sh

ENTRYPOINT /resources/init.sh


