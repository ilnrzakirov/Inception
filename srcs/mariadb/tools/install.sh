sudo apt-get update
sudo apt-get -y install mariadb-server
mv 50-server.conf /etc/mysql/mariadb.conf.d/
