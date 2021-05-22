service mysql start
cp -r -p /var/lib/mysql/ /home/juanrodr/data/
service mysql stop
rm /etc/mysql/mariadb.conf.d/50-server.cnf
mv -f ./50-server.cnf /etc/mysql/mariadb.conf.d/
service mysql start
mysql -u root < ./db_server.sql
