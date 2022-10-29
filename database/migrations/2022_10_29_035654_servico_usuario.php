<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ServicoUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos_usuarios', function (Blueprint $table) {
            $table->integer('usuario_id'); //coluna do tipo inteiro (int) com nome usuario_id
            $table->integer('servico_id'); //coluna do tipo inteiro (int) com nome servico_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicos_usuarios'); // Aqui, caso dê um comando de php artisan migrate:rollback, irá apagar a tabela
    }
}
