FROM debian:buster

RUN apt update
RUN apt install -y nginx openssl

EXPOSE 443

COPY ./tools/default /etc/nginx/sites-enabled/default
COPY ./tools/start.sh /var/www

ENTRYPOINT bash /var/www/start.sh
