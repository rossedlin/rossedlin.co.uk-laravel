#!/usr/bin/env bash

echo "Update -> www.rossedlin.co.uk"
cd ~

#Cleanup
rm -R -f www.rossedlin.co.uk

#Git
git clone https://github.com/rossedlin/www.rossedlin.co.uk

#Permissions
chmod 774 -R ~/www.rossedlin.co.uk

#Composer
cd www.rossedlin.co.uk
php composer.phar install

~/www.rossedlin.co.uk/build/update/lightsail.sh