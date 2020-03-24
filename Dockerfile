FROM snipe/snipe-it:v4.9.0

COPY startup.sh /var/www/html/
RUN chmod 755 /var/www/html/startup.sh
RUN chmod 755 /supervisord.conf

RUN if [ -f /var/lib/snipeit/ssl/snipeit-ssl.crt -a -f /var/lib/snipeit/ssl/snipeit-ssl.key ]; then a2enmod ssl; else a2dismod ssl; fi

RUN mkdir -p /var/lib/snipeit/data/private_uploads/
RUN mkdir -p /var/lib/snipeit/data/uploads/accessories/
RUN mkdir -p /var/lib/snipeit/data/uploads/avatars/
RUN mkdir -p /var/lib/snipeit/data/uploads/barcodes/
RUN mkdir -p /var/lib/snipeit/data/uploads/categories/
RUN mkdir -p /var/lib/snipeit/data/uploads/companies/
RUN mkdir -p /var/lib/snipeit/data/uploads/components/
RUN mkdir -p /var/lib/snipeit/data/uploads/consumables/
RUN mkdir -p /var/lib/snipeit/data/uploads/departments/
RUN mkdir -p /var/lib/snipeit/data/uploads/locations/
RUN mkdir -p /var/lib/snipeit/data/uploads/manufacturers/
RUN mkdir -p /var/lib/snipeit/data/uploads/models/
RUN mkdir -p /var/lib/snipeit/data/uploads/suppliers/
RUN mkdir -p /var/lib/snipeit/dumps/
RUN mkdir -p /var/lib/snipeit/keys/

RUN chmod 777 /var/lib/snipeit/*

RUN if [ ! -f "/var/www/html/database/migrations/*create_oauth*" ]; then cp -ax /var/www/html/vendor/laravel/passport/database/migrations/* /var/www/html/database/migrations/ ; fi

CMD exec supervisord -c /supervisord.conf
RUN chmod 755 /usr/sbin/apache2ctl

USER 1000
ENTRYPOINT ["/var/www/html/startup.sh"]

CMD [ "/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
