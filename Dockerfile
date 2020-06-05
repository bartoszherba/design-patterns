FROM php:7.4-apache
COPY . /usr/src/patterns
WORKDIR /usr/src/patterns
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git

CMD [ "php", "./greetings.php" ]
