FROM ubuntu:22.04

LABEL maintainer="Naufal <naufal@example.com>"

ARG MYSQL_ROOT_PASSWORD=password

# Disable interactive installation
ENV DEBIAN_FRONTEND=noninteractive

# Allow silent install MySQL (Default Password: password)
RUN echo "mysql-server mysql-server/root-pass password '${MYSQL_ROOT_PASSWORD}'" | debconf-set-selections
RUN echo "mysql-server mysql-server/re-root-pass password '${MYSQL_ROOT_PASSWORD}'" | debconf-set-selections

# Installing apache2, mysql, php, netcat and supervisor
RUN apt-get update \
    && apt-get install -y apache2 mysql-server netcat supervisor php8.1 php8.1-mysql \
    && apt-get -y autoremove \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Configuring Supervisor
# Supervisor used for run multiple process in background
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

RUN sed -i 's/DirectoryIndex index.html/DirectoryIndex index.php/g' /etc/apache2/mods-enabled/dir.conf
RUN sed -i 's/^bind-address/# bind-address/' /etc/mysql/mysql.conf.d/mysqld.cnf

# Copy container scripts
COPY setup.sh /
COPY init.sh /

# Copy project files
COPY redlock-db.sql /
COPY db.php /var/www/html/
COPY index.php /var/www/html/

# Change owner
RUN chmod -R u+rwX,g+rX,o-rwx /var/www/html && \
    chown -R www-data:www-data /var/www/html 

RUN chmod +x /setup.sh

EXPOSE 3306 80

CMD [ "/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf" ]
