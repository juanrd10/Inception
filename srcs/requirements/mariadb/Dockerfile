FROM debian:buster

COPY conf/db_server.sql ./
COPY conf/db_server.sql ./

RUN apt update && \
	apt -y install nginx mariadb-server && \
	apt upgrade

CMD service mysql start ; \
	cp -r -p /var/lib/mysql/ /Users/juanrodr/data/ ; \
	service mysql stop ; \
	rm /etc/mysql/mariadb.conf.d/50-server.cnf ; \
	mv -f ./50-server.cnf /etc/mysql/mariadb.conf.d/ ; \
	service mysql start && mysql -u root < ./db_server.sql && bash

