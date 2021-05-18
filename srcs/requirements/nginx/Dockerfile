FROM debian:buster

COPY tools/server /etc/nginx/sites-available/

RUN apt update && \
	apt -y install nginx && \
	apt upgrade &&\
    rm -rf /etc/nginx/sites-available/default && \
	rm -rf /etc/nginx/sites-enabled/default && \
	ln -fs /etc/nginx/sites-available/server /etc/nginx/sites-enabled/

EXPOSE 80 443

CMD	bash
