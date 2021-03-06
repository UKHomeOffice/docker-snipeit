FROM ubuntu:bionic

RUN export DEBIAN_FRONTEND=noninteractive; \
    export DEBCONF_NONINTERACTIVE_SEEN=true; \
    echo 'tzdata tzdata/Areas select Etc' | debconf-set-selections; \
    echo 'tzdata tzdata/Zones/Etc select UTC' | debconf-set-selections; \
    apt-get update -qqy \
 && apt-get install -qqy --no-install-recommends \
apt-utils \
apache2 \
apache2-bin \
libapache2-mod-php7.2 \
php7.2-curl \
php7.2-ldap \
php7.2-mysql \
php7.2-gd \
php7.2-xml \
php7.2-mbstring \
php7.2-zip \
php7.2-bcmath \
patch \
curl \
wget  \
vim \
git \
cron \
mysql-client \
supervisor \
cron \
gcc \
make \
autoconf \
libc-dev \
pkg-config \
libmcrypt-dev \
php7.2-dev \
ca-certificates \
unzip \
&& rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*


RUN curl -L -O https://github.com/pear/pearweb_phars/raw/master/go-pear.phar
RUN php go-pear.phar
RUN pecl install mcrypt-1.0.2
RUN bash -c "echo extension=/usr/lib/php/20170718/mcrypt.so > /etc/php/7.2/mods-available/mcrypt.ini"

RUN phpenmod mcrypt
RUN phpenmod gd
RUN phpenmod bcmath

RUN sed -i 's/variables_order = .*/variables_order = "EGPCS"/' /etc/php/7.2/apache2/php.ini
RUN sed -i 's/variables_order = .*/variables_order = "EGPCS"/' /etc/php/7.2/cli/php.ini

#Removed for COP
#RUN useradd -m --uid 1000 --gid 50 docker
#RUN echo export APACHE_RUN_USER=docker >> /etc/apache2/envvars
#RUN echo export APACHE_RUN_GROUP=staff >> /etc/apache2/envvars

COPY docker/000-default.conf /etc/apache2/sites-enabled/000-default.conf

#SSL
RUN mkdir -p /var/lib/snipeit/ssl
COPY docker/001-default-ssl.conf /etc/apache2/sites-enabled/001-default-ssl.conf
RUN a2enmod ssl
COPY . /var/www/html
RUN a2enmod rewrite

#Customized for COP
RUN chmod -R 777 /var/log
RUN chmod -R 777 /var/run/apache2
RUN sed -i -e 's/:80/:9000/g' /etc/apache2/sites-enabled/000-default.conf
RUN sed -i -e 's/Listen 80/Listen 9000/g' /etc/apache2/ports.conf
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

#/startup.sh
RUN if [ -f /var/lib/snipeit/ssl/snipeit-ssl.crt -a -f /var/lib/snipeit/ssl/snipeit-ssl.key ]; then a2enmod ssl; else a2dismod ssl; fi

############ INITIAL APPLICATION SETUP #####################

WORKDIR /var/www/html

#copy all configuration files
COPY .env /var/www/html/.env

#Changed user from docker to www-data
RUN chown -R www-data /var/www/html

#/startup.sh
RUN \
        mkdir -p "/var/lib/snipeit/data/private_uploads" \
     && mkdir -p "/var/lib/snipeit/data/uploads/accessories" \
     && mkdir -p "/var/lib/snipeit/data/uploads/avatars" \
     && mkdir -p "/var/lib/snipeit/data/uploads/barcodes" \
     && mkdir -p "/var/lib/snipeit/data/uploads/categories" \
     && mkdir -p "/var/lib/snipeit/data/uploads/companies" \
     && mkdir -p "/var/lib/snipeit/data/uploads/components" \
     && mkdir -p "/var/lib/snipeit/data/uploads/consumables" \
     && mkdir -p "/var/lib/snipeit/data/uploads/departments" \
     && mkdir -p "/var/lib/snipeit/data/uploads/locations" \
     && mkdir -p "/var/lib/snipeit/data/uploads/manufacturers" \
     && mkdir -p "/var/lib/snipeit/data/uploads/models" \
     && mkdir -p "/var/lib/snipeit/data/uploads/suppliers" \
     && mkdir "/var/lib/snipeit/dumps"

RUN \
	       rm -r "/var/www/html/storage/private_uploads" && ln -fs "/var/lib/snipeit/data/private_uploads" "/var/www/html/storage/private_uploads" \
      && rm -rf "/var/www/html/public/uploads" && ln -fs "/var/lib/snipeit/data/uploads" "/var/www/html/public/uploads" \
      && rm -r "/var/www/html/storage/app/backups" && ln -fs "/var/lib/snipeit/dumps" "/var/www/html/storage/app/backups" \
      && mkdir -p "/var/lib/snipeit/keys" && ln -fs "/var/lib/snipeit/keys/oauth-private.key" "/var/www/html/storage/oauth-private.key" \
      && ln -fs "/var/lib/snipeit/keys/oauth-public.key" "/var/www/html/storage/oauth-public.key" \
      && chown www-data "/var/lib/snipeit/keys/" \
      && chown -h www-data "/var/www/html/storage/" \
      && chmod +x /var/www/html/artisan \
      && echo "Finished setting up application in /var/www/html"

#/startup.sh
RUN \
        chown -R www-data:root /var/lib/snipeit/data/* \
     && chown -R www-data:root /var/lib/snipeit/dumps \
     && chown -R www-data:root /var/lib/snipeit/keys

############## DEPENDENCIES via COMPOSER ###################

#global install of composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Get dependencies
RUN composer install --no-dev --working-dir=/var/www/html

############### DATA VOLUME #################

VOLUME ["/var/lib/snipeit"]

##### START SERVER

COPY supervisord.conf startup.sh /
COPY docker/supervisor-exit-event-listener /usr/bin/supervisor-exit-event-listener
RUN chmod +x /startup.sh /usr/bin/supervisor-exit-event-listener

USER www-data
CMD ["/startup.sh"]
