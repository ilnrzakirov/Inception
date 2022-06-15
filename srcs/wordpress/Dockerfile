FROM debian:buster

RUN sudo apt update

RUN sudo apt install -y php7.3 php-mysqli php-fpm mariadb-client curl sendmail

COPY ./tools/www.conf /etc/php/7.3/fpm/pool.d

ADD https://ru.wordpress.org/wordpress-5.7.2-ru_RU.tar.gz /var/www/
RUN cd /var/www
RUN tar -xzvf wordpress-5.7.2-ru_RU.tar.gz
RUN rm -f /var/www/wordpress-5.7.2-ru_RU.tar.gz

RUN curl -0 https://raw.githubsercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp
RUN rm -f /var/www/wordpress/wp-config-sample.php
RUN mkdir /run/php/

WORKDIR /var/www/wordpress
COPY /tools/start.sh .

