sudo apt-get update
sudo apt-get -y install nginx wget
openssl req -x509 -nodes -days 365 -newkey rsa:4096 \
		-keyout /etc/ssl/private/nginx.key \
		-out /etc/ssl/certs/nginx.crt \
		-subj "/C=RU/ST=Tatarstan/L=Kazan/O=wordpress/CN=bcarlee.42.fr";
mv nginx.conf /etc/nginx/sites-available/default
