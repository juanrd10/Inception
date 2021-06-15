FROM debian:buster

COPY conf/50-server.cnf ./dock_import/
COPY ./conf/init.sh /resources/

RUN apt -y update && \
	apt -y install mariadb-server ; \
	apt -y upgrade

RUN chmod 777 /resources/init.sh

ENTRYPOINT /resources/init.sh
