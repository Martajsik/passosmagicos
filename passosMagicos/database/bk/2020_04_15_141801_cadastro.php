<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cadastro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('nome', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->integer('cpf')->nullable();
            $table->string('rg', 45)->nullable();
            $table->integer('tipo')->nullable();
            $table->string('turma', 45)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cadastro');
    }
}
