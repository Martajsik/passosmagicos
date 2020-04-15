<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunoMateriaPresencaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'aluno_materia_presenca';

    /**
     * Run the migrations.
     * @table aluno_materia_presenca
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->dateTime('data');
            $table->integer('cadastro_id');
            $table->integer('materia_id');

            $table->index(["materia_id"], 'fk_aluno_materia_presenca_materia1_idx');

            $table->index(["cadastro_id"], 'fk_aluno_materia_presenca_cadastro1_idx');


            $table->foreign('cadastro_id', 'fk_aluno_materia_presenca_cadastro1_idx')
                ->references('id')->on('cadastro')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('materia_id', 'fk_aluno_materia_presenca_materia1_idx')
                ->references('id')->on('materia')
                ->onDelete('no action')
                ->onUpdate('no action');
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
