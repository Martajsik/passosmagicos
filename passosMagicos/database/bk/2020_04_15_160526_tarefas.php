<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tarefas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('descricao', 45);
            $table->integer('materia_id')->unsigned();
            $table->dateTime('data');
            $table->integer('unidade_id')->unsigned();

            $table->index('materia_id', 'fk_tarefas_materia1_idx');
            $table->index('unidade_id', 'fk_tarefas_unidade1_idx');

            $table->foreign('materia_id')
                ->references('id')->on('materia');

            $table->foreign('unidade_id')
                ->references('id')->on('unidades');


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
        Schema::dropIfExists('tarefas');
    }
}
