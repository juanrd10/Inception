FROM debian:buster

VOLUME [ "/var/lib/mysql" ]
COPY conf/50-server.cnf ./dock_import/
COPY conf/create_wordpress.sql ./dock_import/
COPY conf/wordpress.sql ./dock_import/
COPY conf/create_admin.sql ./dock_import/

ARG MYSQL_USER
ARG MYSQL_PASSWORD
ARG MYSQL_ROOT_PASS
ARG MYSQL_USER_ADM
ARG MYSQL_PASSWORD_ADM

RUN apt -y update && \
	apt -y install mariadb-server ; \
	apt -y upgrade

RUN sed -i "s/MYSQL_USER/${MYSQL_USER}/g" /dock_import/create_wordpress.sql
RUN sed -i "s/MYSQL_PASSWORD/${MYSQL_PASSWORD}/g" /dock_import/create_wordpress.sql
RUN sed -i "s/MYSQL_ROOT_PASS/${MYSQL_ROOT_PASS}/g" /dock_import/create_admin.sql
RUN sed -i "s/MYSQL_USER_ADM/${MYSQL_USER_ADM}/g" /dock_import/create_admin.sql
RUN sed -i "s/MYSQL_PASSWORD_ADM/${MYSQL_PASSWORD_ADM}/g" /dock_import/create_admin.sql
RUN rm -f /etc/mysql/mariadb.conf.d/50-server.cnf
RUN	cp /dock_import/50-server.cnf /etc/mysql/mariadb.conf.d/
RUN service mysql start && mysql -i < /dock_import/create_wordpress.sql && mysql -i < /dock_import/wordpress.sql && mysql -i < /dock_import/create_admin.sql

CMD [ "mysqld" ]
