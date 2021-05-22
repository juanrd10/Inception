FROM debian:buster

COPY conf/db_server.sql ./
COPY conf/50-server.cnf ./
COPY conf/init.sh ./dock_import/

RUN apt -y update && \
	apt -y install nginx mariadb-server && \
	apt -y upgrade

CMD service mysql start ; \
	cp -r -p /var/lib/mysql/ /home/juanrodr/data/db/ ; \
	service mysql stop ; \
	rm /etc/mysql/mariadb.conf.d/50-server.cnf ; \
	mv -f ./50-server.cnf /etc/mysql/mariadb.conf.d/ ; \
	service mysql start && mysql -u root < ./db_server.sql && bash

