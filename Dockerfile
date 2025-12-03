FROM php:8.2-cli

WORKDIR /usr/src/myapp

COPY . /usr/src/myapp

CMD [ "php", "./index.php" ]
