#!/bin/sh

set -e

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

exec supervisord -c /supervisord.conf
