<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysOnDb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('aluno_materia_observacoes', function (Blueprint $table) {
            $table->foreign('materia_id', 'fk_aluno_materia_observacoes_materia1_idx')
                ->references('id')->on('materias');

            $table->foreign('user_id', 'fk_aluno_materia_observacoes_user1_idx')
                ->references('id')->on('users');
        });
        Schema::table('aluno_materia_notas', function (Blueprint $table) {

            $table->index(["user_id"], 'fk_aluno_materia_notas_user1_idx');

            $table->index(["materia_id"], 'fk_aluno_materia_notas_materia1_idx');


            $table->foreign('user_id', 'fk_aluno_materia_notas_user1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('materia_id', 'fk_aluno_materia_notas_materia1_idx')
                ->references('id')->on('materias')
                ->onDelete('no action')
                ->onUpdate('no action');
        });

        Schema::table('aluno_materias', function (Blueprint $table) {

            $table->index(["materia_id"], 'fk_aluno_materias_materia1_idx');

            $table->index(["user_id"], 'fk_aluno_materias_user1_idx');


            $table->foreign('materia_id', 'fk_aluno_materias_materia1_idx')
                ->references('id')->on('materias')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('user_id', 'fk_aluno_materias_user1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');
        });

        Schema::table('tarefas', function (Blueprint $table) {
            $table->index(["unidades_id"], 'fk_tarefas_unidades1_idx');

            $table->index(["materia_id"], 'fk_tarefas_materia1_idx');


            $table->foreign('unidades_id', 'fk_tarefas_unidades1_idx')
                ->references('id')->on('unidades')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('materia_id', 'fk_tarefas_materia1_idx')
                ->references('id')->on('materias')
                ->onDelete('no action')
                ->onUpdate('no action');
        });

        Schema::table('prof_materias', function (Blueprint $table) {
            $table->index(["materia_id"], 'fk_prof_materia_materia1_idx');

            $table->index(["user_id"], 'fk_prof_materia_user1_idx');

            $table->index(["unidades_id"], 'fk_prof_materia_unidades1_idx');


            $table->foreign('unidades_id', 'fk_prof_materia_unidades1_idx')
                ->references('id')->on('unidades')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('user_id', 'fk_prof_materia_user1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('materia_id', 'fk_prof_materia_materia1_idx')
                ->references('id')->on('materias')
                ->onDelete('no action')
                ->onUpdate('no action');
        });

        Schema::table('aluno_materia_presencas', function (Blueprint $table) {

            $table->index(["materia_id"], 'fk_aluno_materia_presenca_materia1_idx');

            $table->index(["user_id"], 'fk_aluno_materia_presenca_user1_idx');


            $table->foreign('user_id', 'fk_aluno_materia_presenca_user1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('materia_id', 'fk_aluno_materia_presenca_materia1_idx')
                ->references('id')->on('materias')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
        Schema::table('aluno_tarefa', function (Blueprint $table) {

            $table->index(["user_id"], 'fk_aluno_tarefa_user1_idx');

            $table->index(["unidades_id"], 'fk_aluno_tarefa_unidades1_idx');

            $table->index(["materia_id"], 'fk_aluno_tarefa_materia1_idx');

            $table->foreign('unidades_id', 'fk_aluno_tarefa_unidades1_idx')
                ->references('id')->on('unidades')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('user_id', 'fk_aluno_tarefa_user1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('materia_id', 'fk_aluno_tarefa_materia1_idx')
                ->references('id')->on('materias')
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
        //
    }
}
