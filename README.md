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


Modelagem de dados, usando laravel e mysql.
E uma modelagem de um sistema de chats.


Seguindo o exemplo de UserChat o projeto se baseia em:
Criar um controller, models, migrations, layouts, userchats[na views], routes.
você deve seguir sempre coerente com os nomes para não dar erro.
o banco de dado e as tabelas devem seguir a risca tudo aplicado no controller.

Controller:
php artisan make:controller UserChatController

Migration:
php artisan make:migration create_user_chats_table --create=user_chats
php artisan migrate
php artisan migrate:fresh

Model:
php artisan make:model UserChat

Views:
userchat-
   create.blade.php
   edit.blade.php
   index.blade.php
   show.blade.php

layout-
   create.blade.php
   edit.blade.php
   index.blade.php
   show.blade.php
