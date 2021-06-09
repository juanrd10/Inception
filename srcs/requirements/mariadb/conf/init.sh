chown -R mysql:mysql /var/lib/mysql
mysql_install_db
service mysql start
mysql -u root < "/dock_import/db_server.sql"
service mysql stop
rm /etc/mysql/mariadb.conf.d/50-server.cnf
mv -f /dock_import/50-server.cnf /etc/mysql/mariadb.conf.d/
service mysql start
tail -f /var/log/mysql/error.log
