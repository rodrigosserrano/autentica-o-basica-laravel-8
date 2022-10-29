<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('email')->unique(); // tabela do tipo string / char / varchar -- texto com nome 'email' porém com chave 'unica', ou seja, não pode repetir o valor
            $table->string('password');
            $table->timestamps(); // essa função cria automaticamente as colunas 'updated_at' (data de atualização da informação) e 'created_at' (data de criação da informação)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users'); // Aqui, caso dê um comando de php artisan migrate:rollback, irá apagar a tabela
    }
}
