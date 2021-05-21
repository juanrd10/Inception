CREATE DATABASE wordpress;
CREATE USER 'juanrodr'@'%' IDENTIFIED BY 'juanrodr';
GRANT ALL PRIVILEGES ON *.* TO 'juanrodr'@'%';
FLUSH PRIVILEGES;
update mysql.user set plugin = 'mysql_native_password' where user='root';
