<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunoMateriaObservacoesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'aluno_materia_observacoes';

    /**
     * Run the migrations.
     * @table aluno_materia_observacoes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('obvservacoes');
            $table->dateTime('data');
            $table->integer('cadastro_id');
            $table->integer('materia_id');

            $table->index(["materia_id"], 'fk_aluno_materia_observacoes_materia1_idx');

            $table->index(["cadastro_id"], 'fk_aluno_materia_observacoes_cadastro1_idx');


            $table->foreign('cadastro_id', 'fk_aluno_materia_observacoes_cadastro1_idxx')
                ->references('id')->on('cadastro')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('materia_id', 'fk_aluno_materia_observacoes_materia1_idxx')
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
