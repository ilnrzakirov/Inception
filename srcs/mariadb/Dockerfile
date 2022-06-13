FROM debian:buster

WORKDIR /tmp/mariadb
COPY tools .
ARG DB_NAME=$DB_NAME
ARG DB_USER=$DB_USER
ARG DB_PASWORD=$DB_PASWORD
RUN chmod +x install.sh
RUN sh install.sh
RUN rm install.sh
CMD ./start.sh