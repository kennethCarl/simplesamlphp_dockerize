#!/bin/sh

cd /var/www/html

FILE=/tmp/composer.ran
if [ -f $FILE ]; then
    echo "composer has already ran"
else
    echo "StrictHostKeyChecking no" >> /etc/ssh/ssh_config
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    php composer-setup.php
    php composer.phar install --no-interaction

    DIR=api
    if [ -d "$DIR" ]; then
    cd $DIR
    php ../composer.phar install --no-interaction
    cd ..
    fi

    DIR=modules
    if [ -d "$DIR" ]; then
    cd $DIR
    php ../composer.phar install --no-interaction
    cd ..
    fi

    #echo "chowning /var/www/html/storage/ for www-data"
    #chown -R www-data:www-data /var/www/html/storage/
    #touch $FILE
fi

npm=/tmp/npm.ran
if [ -f $npm ]; then
    echo "npm commands already ran"
else
    #npm install git+https://$NPM_AUTH:x-oauth-basic@github.com/Timeless-Medical-International/tms-ui#master
    npm install
    npm run dev
    touch $npm
fi

exec /usr/sbin/apache2ctl -DFOREGROUND
