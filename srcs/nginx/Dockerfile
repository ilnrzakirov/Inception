FROM debian:buster

WORKDIR /tmp/nginx/

COPY tools .
RUN chmod +x start.sh
RUN sh start.sh
RUN rm start.sh
CMD ["nginx", "-g", "deamon off;"]