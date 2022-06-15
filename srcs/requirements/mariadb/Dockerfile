FROM debian:buster

WORKDIR /tmp/mariadb
COPY tools .
ARG DB_NAME=$DB_NAME
ARG DB_USER=$DB_USER
ARG DB_PASWORD=$DB_PASWORD
RUN sh install.sh
RUN rm unstall.sh
CMD sh start.sh