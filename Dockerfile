FROM 1and1internet/ubuntu-16-apache-php-7.0
MAINTAINER jessica.smith@fasthosts.com

COPY src/ /var/www/
ENV WEB_ROOT="/var/www/public/"