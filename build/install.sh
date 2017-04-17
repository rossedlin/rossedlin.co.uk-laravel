#!/usr/bin/env bash

echo "Install -> www.rossedlin.co.uk"
cd ~

#Cleanup
rm -R -f www.rossedlin.co.uk

#Git
git clone https://github.com/rossedlin/www.rossedlin.co.uk

#Composer
cd www.rossedlin.co.uk
/usr/bin/php-5.6 composer.phar install

#Envronment File
cp public_html/.env www.rossedlin.co.uk/.env

#Folders
cd ~
mv public_html old_html
mv www.rossedlin.co.uk public_html
rm -R -f old_html

#Symlink Install File
cd ~
rm install.sh
ln public_html/build/install.sh install.sh
chmod +x install.sh