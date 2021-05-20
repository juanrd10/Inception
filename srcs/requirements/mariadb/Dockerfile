FROM debian:buster

COPY conf/db_server.sql ./

RUN apt update && \
	apt -y install mariadb-server && \
	apt upgrade

CMD service mysql start && mysql -u root < ./db_server.sql && bash

