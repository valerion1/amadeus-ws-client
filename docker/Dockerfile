FROM php:7.1-cli

RUN apt-get update -y && apt-get install -y libxml2-dev libxslt-dev && apt-get clean -y

RUN docker-php-ext-install soap xsl