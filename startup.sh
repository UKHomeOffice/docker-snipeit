#!/bin/sh

echo "== Starting environment variable substitution =="
for file in /var/www/html/.env
do
  echo "== Environment variable substitution for $file =="
  sed -i 's,{{.SNIPEIT_MYSQL_HOST}},'${SNIPEIT_MYSQL_HOST}',g' $file
  sed -i 's,{{.SNIPEIT_MYSQL_PORT}},'${SNIPEIT_MYSQL_PORT}',g' $file
  sed -i 's,{{.SNIPEIT_MYSQL_USER}},'${SNIPEIT_MYSQL_USER}',g' $file
  sed -i 's,{{.SNIPEIT_MYSQL_PASSWORD}},'${SNIPEIT_MYSQL_PASSWORD}',g' $file
  sed -i 's,{{.SNIPEIT_MYSQL_DBNAME}},'${SNIPEIT_MYSQL_DBNAME}',g' $file
  sed -i 's,{{.SNIPEIT_MYSQL_TBL_PREFIX}},'${SNIPEIT_MYSQL_TBL_PREFIX}',g' $file
  sed -i 's,{{.HOSTNAME}},'${HOSTNAME}',g' $file
  sed -i 's,{{.SNIPEIT_APP_KEY}},'${SNIPEIT_APP_KEY}',g' $file
  sed -i 's,{{.SNIPEIT_APP_ENV}},'${SNIPEIT_APP_ENV}',g' $file
  sed -i 's,{{.SNIPEIT_EMAIL_USER}},'${SNIPEIT_EMAIL_USER}',g' $file
  sed -i 's,{{.SNIPEIT_EMAIL_PASSWORD}},'${SNIPEIT_EMAIL_PASSWORD}',g' $file
done
echo "== Finished environment variable substitution =="

# fix key if needed
if [ -z "$APP_KEY" ]
then
  echo "Please re-run this container with an environment variable \$APP_KEY"
  echo "An example APP_KEY you could use is: "
  /var/www/html/artisan key:generate --show
  exit
fi

if [ -f /var/lib/snipeit/ssl/snipeit-ssl.crt -a -f /var/lib/snipeit/ssl/snipeit-ssl.key ]
then
  a2enmod ssl
else
  a2dismod ssl
fi

# create data directories
for dir in \
  'data/private_uploads' \
  'data/uploads/accessories' \
  'data/uploads/avatars' \
  'data/uploads/barcodes' \
  'data/uploads/categories' \
  'data/uploads/companies' \
  'data/uploads/components' \
  'data/uploads/consumables' \
  'data/uploads/departments' \
  'data/uploads/locations' \
  'data/uploads/manufacturers' \
  'data/uploads/models' \
  'data/uploads/suppliers' \
  'dumps' \
  'keys'
do
  [ ! -d "/var/lib/snipeit/$dir" ] && mkdir -p "/var/lib/snipeit/$dir"
done

chown -R docker:root /var/lib/snipeit/data/*
chown -R docker:root /var/lib/snipeit/dumps
chown -R docker:root /var/lib/snipeit/keys

# If the Oauth DB files are not present copy the vendor files over to the db migrations
if [ ! -f "/var/www/html/database/migrations/*create_oauth*" ]
then
  cp -ax /var/www/html/vendor/laravel/passport/database/migrations/* /var/www/html/database/migrations/
fi

exec supervisord -c /supervisord.conf
