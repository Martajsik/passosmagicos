<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlunoMaterias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno_materias', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('cadastro_id')->unsigned();
            $table->integer('materia_id')->unsigned();

            $table->index('cadastro_id', 'fk_aluno_materias_cadastro_idx');
            $table->index('materia_id', 'fk_aluno_materias_materia1_idx');

            $table->foreign('cadastro_id')
                ->references('id')->on('cadastro');

            $table->foreign('materia_id')
                ->references('id')->on('materia');

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
        Schema::dropIfExists('aluno_materias');
    }
}
