@ECHO OFF
docker compose up -d
composer install --working-dir=./app
./assets/scripts/enable-pdo_mysql.bat