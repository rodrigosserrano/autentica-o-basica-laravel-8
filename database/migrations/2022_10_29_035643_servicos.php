<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Servicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->id()->autoIncrement(); // coluna id, costuma ser integer, com parametro 'auto incremento', ou seja, ela adiciona um valor a mais automaticamente
            $table->string('nome'); // coluna do tipo string / char / varchar -- texto com nome 'nome'
            $table->string('descricao'); // coluna do tipo string / char / varchar -- texto com nome 'descricao'
            $table->decimal('valor', 10); // coluna do tipo 'decimal', recebe valores como 100.10, 22.98, 1,323.34
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicos'); // Aqui, caso dê um comando de php artisan migrate:rollback, irá apagar a tabela
    }
}
