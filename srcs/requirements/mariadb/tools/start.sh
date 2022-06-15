chown -R mysql:mysql /var/lib/mysql
if ! [ -d "/var/lib/mysql/wordpress"]; then
  service mysql start
  mysql -u root -e "CREATE DATABASE if NOT EXIST $DB_NAME DEFAULT CHARACTER SET utf-8;"
  mysql -u root -e "CREATE USER '$DB_USER'@'%' IDENTIFIED BY 'DB_PASSWORD';"
  mysql -u root -e "GRANT ALL PRIVILEGES ON $DB_NAME.* TO '$DB_USER'@'%';"
  mysql -u root -e "FLUSH PRIVILEGES;"
  mysqladmin -u root password $DB_ROOT_PASSWORD
  service mysql stop
fi


/usr/bin/mysql_safe