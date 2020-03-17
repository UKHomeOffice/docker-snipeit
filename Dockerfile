FROM snipe/snipe-it:v4.9.0

#ENV USERMAP_UID 1000

COPY startup.sh /
COPY .env /var/www/html/

RUN chmod 755 /startup.sh

RUN sed -i -e 's/:80/:9000/g' /etc/apache2/sites-enabled/000-default.conf
RUN sed -i -e 's/Listen 80/Listen 9000/g' /etc/apache2/ports.conf

#USER ${USERMAP_UID}

ENTRYPOINT ["/startup.sh"]
