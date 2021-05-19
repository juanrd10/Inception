FROM debian:buster

COPY tools/juanrodr /etc/nginx/sites-available/

RUN apt update && \
	apt -y install nginx && \
	apt upgrade &&\
	rm -rf /etc/nginx/sites-enabled/default && \
	ln -fs /etc/nginx/sites-available/juanrodr /etc/nginx/sites-enabled/ && \
    chown -R www-data:www-data /var/www/* && \
    chmod -R 755 /var/www/*

EXPOSE 80 443

    CMD service nginx start && \
        bash
