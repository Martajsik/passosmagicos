<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunoMateriasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'aluno_materias';

    /**
     * Run the migrations.
     * @table aluno_materias
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('materia_id')->unsigned();
            $table->integer('cadastro_id')->unsigned();
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
