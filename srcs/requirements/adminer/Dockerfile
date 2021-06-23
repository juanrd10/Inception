FROM debian:buster

RUN apt -y update && \
	apt -y install wget && \
	apt -y upgrade

CMD wget https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1.php && \
	apt -y remove wget ; \
	mv adminer-4.8.1.php /var/www/html/wordpress && \
	bash
