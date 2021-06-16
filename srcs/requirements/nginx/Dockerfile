FROM debian:buster

COPY tools/juanrodr /etc/nginx/sites-available/juanrodr
COPY tools/index.html /

RUN apt -y update && \
	apt -y install nginx openssl && \
	apt -y upgrade

RUN rm -rf /etc/nginx/sites-enabled/default && \
	ln -fs /etc/nginx/sites-available/juanrodr /etc/nginx/sites-enabled/ && \
    chown -R www-data:www-data /var/www/* && \
    chmod -R 755 /var/www/*

RUN chmod -R 700 /etc/ssl/private && \
    openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj "/C=SP/ST=Spain/L=Madrid/O=42/CN=127.0.0.1" -keyout /etc/ssl/private/nginx_server.key -out /etc/ssl/certs/nginx_server.crt && \
    openssl dhparam -out /etc/nginx/dhparam.pem 1000

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]
#ENTRYPOINT mv /index.html /var/www/html
