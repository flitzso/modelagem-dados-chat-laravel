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

Routes:
use App\Http\Controllers\UserChatController;

Route::get('/userchats', [UserChatController::class, 'index'])->name('userchats.index');
Route::get('/userchats/create', [UserChatController::class, 'create'])->name('userchats.create');
Route::post('/userchats', [UserChatController::class, 'store'])->name('userchats.store');
Route::get('/userchats/{id}/edit', [UserChatController::class, 'edit'])->name('userchats.edit');
Route::put('/userchats/{id}', [UserChatController::class, 'update'])->name('userchats.update');
Route::delete('/userchats/{id}', [UserChatController::class, 'destroy'])->name('userchats.destroy');

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