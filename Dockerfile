FROM php:7.2-apache
COPY . /var/www/html/
MAINTAINER sam
EXPOSE 80