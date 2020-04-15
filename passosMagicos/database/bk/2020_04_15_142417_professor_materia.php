<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProfessorMateria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prof_materia', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('cadastro_id')->unsigned();
            $table->integer('materia_id')->unsigned();
            $table->integer('unidade_id')->unsigned();

            $table->index('cadastro_id', 'fk_prof_materia_cadastro1_idx');
            $table->index('materia_id', 'fk_prof_materia_materia1_idx');
            $table->index('unidade_id', 'fk_prof_materia_unidade1_idx');

            $table->foreign('cadastro_id')
                ->references('id')->on('cadastro');

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
        Schema::dropIfExists('professor_materia');
    }
}
