#!/bin/bash
docker exec php sh -c 'exec docker-php-ext-install pdo_mysql' &&
    docker exec php sh -c 'docker-php-ext-enable pdo_mysql' &&
    docker exec php sh -c 'apachectl restart'