FROM debian:buster
RUN apt update
RUN apt install -y mariadb-server
COPY ./tools/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./tools/createdb.sql /var/www/
EXPOSE 3306
RUN service mysql start && mysql < /var/www/createdb.sql && rm -f /var/www/createdb.sql
ENTRYPOINT /usr/bin/mysqld_safe
