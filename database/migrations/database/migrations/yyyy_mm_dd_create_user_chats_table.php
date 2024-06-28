<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserChatsTable extends Migration
{
    public function up()
    {
        Schema::create('user_chats', function (Blueprint $table) {
            $table->id(); // Coluna de chave primária auto-incrementável
            $table->string('name'); // Coluna para o nome do usuário
            $table->string('email')->unique(); // Coluna para o email do usuário, única
            $table->string('password'); // Coluna para a senha do usuário
            $table->timestamps(); // Colunas para timestamps de created_at e updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_chats');
    }
}
