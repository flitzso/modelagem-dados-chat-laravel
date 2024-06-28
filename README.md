# modelagem-dados-chat-laravel #

### Como rodar ###
composer install
cp .env.example .env
php artisan key:generate

##### DB_CONNECTION=mysql #####
##### DB_HOST=127.0.0.1 #####
##### DB_PORT=3306 #####
##### DB_DATABASE=seu_banco_de_dados #####
##### DB_USERNAME=seu_usuario #####
##### DB_PASSWORD=sua_senha #####

php artisan migrate
php artisan serve

