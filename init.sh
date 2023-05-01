#!/usr/bin/env bash

chmod +x /setup.sh

mysql --user=root --password="$MYSQL_ROOT_PASSWORD" <<-EOSQL
    SOURCE /redlock-db.sql;
    CREATE USER IF NOT EXISTS 'naufal'@'%' IDENTIFIED WITH mysql_native_password BY 'naufal';
    GRANT ALL PRIVILEGES ON *.* TO 'naufal'@'%' WITH GRANT OPTION;
    FLUSH PRIVILEGES;
EOSQL
