ALTER USER 'root'@'localhost' IDENTIFIED BY 'MYSQL_ROOT_PASS';
CREATE USER 'MYSQL_USER_ADM'@'%' IDENTIFIED BY 'MYSQL_PASSWORD_ADM';
GRANT ALL PRIVILEGES ON *.* TO 'MYSQL_USER_ADM'@'%';
FLUSH PRIVILEGES;
