DIR="/var/lib/mysql/wordpress"
if [ ! -d "$DIR" ]; then
chown -R mysql:mysql /var/lib/mysql
mysql_install_db
service mysql start
mysql -e "CREATE DATABASE IF NOT EXISTS wordpress"
mysql -e "CREATE USER '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD'"
mysql -e "GRANT ALL PRIVILEGES ON *.* TO '$MYSQL_USER'@'%'"
mysql -e "FLUSH PRIVILEGES"
service mysql stop
fi
rm /etc/mysql/mariadb.conf.d/50-server.cnf
mv -f /dock_import/50-server.cnf /etc/mysql/mariadb.conf.d/
exec /usr/bin/mysqld_safe
