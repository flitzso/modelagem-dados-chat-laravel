<?php

use App\Http\Controllers\UserChatController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('userchat', UserChatController::class);
Route::get('/userchat', [UserChatController::class, 'index'])->name('userchat.index');
Route::get('/userchat/create', [UserChatController::class, 'create'])->name('userchat.create');
Route::post('/userchat', [UserChatController::class, 'store'])->name('userchat.store');
Route::get('/userchat/{userchat}', [UserChatController::class, 'show'])->name('userchat.show');
Route::get('/userchat/{userchat}/edit', [UserChatController::class, 'edit'])->name('userchat.edit');
Route::put('/userchat/{userchat}', [UserChatController::class, 'update'])->name('userchat.update');
Route::delete('/userchat/{userchat}', [UserChatController::class, 'destroy'])->name('userchat.destroy');
