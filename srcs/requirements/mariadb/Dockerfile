FROM debian:buster

COPY conf/db_server.sql ./
COPY conf/50-server.cnf ./dock_import/
#COPY conf/init.sh ./dock_import/

RUN apt -y update && \
	apt -y install nginx mariadb-server && \
	apt -y upgrade

CMD bash
	#service mysql start && \
	#mysql -u root < ./db_server.sql && bash
	#service mysql start ; \
	#service mysql stop ; \
	#rm /etc/mysql/mariadb.conf.d/50-server.cnf ; \
	#mv -f ./dock_import/50-server.cnf /etc/mysql/mariadb.conf.d/ ; \

