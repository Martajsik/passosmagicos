<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarefasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tarefas';

    /**
     * Run the migrations.
     * @table tarefas
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('descricao', 45);
            $table->integer('materia_id');
            $table->dateTime('data');
            $table->integer('unidade_id');

            $table->index(["materia_id"], 'fk_tarefas_materia1_idx');

            $table->index(["unidade_id"], 'fk_tarefas_unidade1_idx');


            $table->foreign('materia_id', 'fk_tarefas_materia1_idx')
                ->references('id')->on('materia')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('unidade_id', 'fk_tarefas_unidade1_idx')
                ->references('id')->on('unidades')
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
