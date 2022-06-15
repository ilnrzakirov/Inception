apt-get update
apt-get install -y mariadb-server
mv 50-server.conf /etc/mysql/mariadb.conf.d/
sed -i 's!#port!port !g' /etc/mysql/mariadb.conf.d/50-server.cnf
sed -i 's!127.0.0.1!0.0.0.0!g' /etc/mysql/mariadb.conf.d/50-server.cnf