<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\UserChatController;

Route::resource('users', UserChatController::class);


/* http://127.0.0.1:8000/users */