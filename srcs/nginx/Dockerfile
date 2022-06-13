FROM debian:buster

WORKDIR /tmp/nginx/

COPY tools .
RUN chmod +x install.sh
RUN sh install.sh
RUN rm install.sh
CMD ["nginx", "-g", "deamon off;"]