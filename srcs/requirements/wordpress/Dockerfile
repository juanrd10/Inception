FROM debian:buster

COPY tools/server /etc/nginx/sites-available/

RUN apt update && \
	apt -y install php-fpm && \
	apt upgrade


