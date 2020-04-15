<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCadastroTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'cadastro';

    /**
     * Run the migrations.
     * @table cadastro
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nome', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->integer('cpf')->nullable();
            $table->string('rg', 45)->nullable();
            $table->integer('tipo')->nullable();
            $table->string('turma', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
