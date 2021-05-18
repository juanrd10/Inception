FROM debian:buster

COPY tools/server /etc/nginx/sites-available/

RUN apt update && \
	apt -y install nginx openssl && \
	apt upgrade
