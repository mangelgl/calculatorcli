FROM php:8.2-cli

WORKDIR /usr/src/calculatorcli

COPY . /usr/src/calculatorcli

CMD [ "php", "./index.php" ]
