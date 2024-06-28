# modelagem-dados-chat-laravel #

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
