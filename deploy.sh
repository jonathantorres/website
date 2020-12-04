#!/usr/bin/env bash

if [ -d "/var/www/jonathantorres/public" ]; then
    sudo rm -rf /var/www/jonathantorres/public
fi

# copy folders and files
sudo cp -vr public/ /var/www/jonathantorres

# change permissions and ownership
sudo chown -R www-data:www-data /var/www/jonathantorres
find /var/www/jonathantorres/ -type d -exec sudo chmod 755 '{}' \;
find /var/www/jonathantorres/ -type f -exec sudo chmod 644 '{}' \;
