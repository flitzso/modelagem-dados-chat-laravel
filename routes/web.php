<?php

use App\Http\Controllers\UserChatController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


/*
* Parametro /userchats esta no lugar de /userchat 
*/
Route::get('/userchats', [UserChatController::class, 'index'])->name('userchats.index');
Route::get('/userchat/create', [UserChatController::class, 'create'])->name('userchat.create');
Route::post('/userchat', [UserChatController::class, 'store'])->name('userchat.store');
Route::get('/userchat/{userchat}', [UserChatController::class, 'show'])->name('userchat.show');
Route::get('/userchat/{userchat}/edit', [UserChatController::class, 'edit'])->name('userchat.edit');
Route::put('/userchat/{userchat}', [UserChatController::class, 'update'])->name('userchat.update');
Route::delete('/userchat/{userchat}', [UserChatController::class, 'destroy'])->name('userchat.destroy');
