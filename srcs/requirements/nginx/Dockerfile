FROM debian:buster

WORKDIR /tmp/nginx/

COPY tools .
COPY tools/nginx.conf /etc/nginx/sites-enabled/nginx.conf
RUN chmod +x start.sh
RUN sh start.sh
RUN rm start.sh
CMD ["nginx", "-g", "daemon off;"]