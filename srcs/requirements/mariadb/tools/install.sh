apt-get update
apt-get -y install mariadb-server
mv 50-server.conf /etc/mysql/mariadb.conf.d/
