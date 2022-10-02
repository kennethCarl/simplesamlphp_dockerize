FROM ubuntu:18.04
RUN apt-get update && apt-get install -y tzdata apt-utils
RUN apt-get install -y software-properties-common libterm-readline-gnu-perl curl
RUN curl -sL https://deb.nodesource.com/setup_14.x -o nodesource_setup.sh && \
    bash nodesource_setup.sh
RUN add-apt-repository ppa:ondrej/php
RUN add-apt-repository ppa:ondrej/apache2
RUN apt-get update && \
    apt-get install -y nodejs php7.4 php7.4-fpm php7.4-mbstring php7.4-mysqli php7.4-bcmath php7.4-gmp \
    mariadb-client git unzip php7.4-xml apache2 libapache2-mod-php7.4 php7.4-curl net-tools dos2unix php7.4-zip
COPY docker-entrypoint.sh /root/
RUN dos2unix /root/docker-entrypoint.sh
RUN chmod +x /root/docker-entrypoint.sh
RUN a2enmod rewrite
RUN a2enmod ssl
RUN a2enmod lbmethod_byrequests

CMD ["/root/docker-entrypoint.sh"]
