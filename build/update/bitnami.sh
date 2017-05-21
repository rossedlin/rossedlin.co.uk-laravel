#!/usr/bin/env bash

echo "Update -> www.rossedlin.co.uk -> Amazon Lightsail"

#Folders
cd ~
rm -R -f www/old.rossedlin.co.uk
mv www/www.rossedlin.co.uk www/old.rossedlin.co.uk
mv www.rossedlin.co.uk www/www.rossedlin.co.uk

#Envronment File
cd ~
cp www/old.rossedlin.co.uk/.env www/www.rossedlin.co.uk/.env