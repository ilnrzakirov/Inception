FROM debian:buster

WORKDIR /tmp/mariadb
COPY tools .
ARG DB_NAME=$DB_NAME
ARG DB_USER=$DB_USER
ARG DB_PASWORD=$DB_PASWORD
RUN chmod +x start.sh
RUN sh start.sh
RUN rm start.sh
CMD ./start.sh