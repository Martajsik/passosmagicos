<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_pais')->nullable();
            $table->string('contato')->nullable();
            $table->integer('user_id')->unsigned();
            //se quiser adc mais campos//
            $table->timestamps();
        });
        Schema::table('alunos', function (Blueprint $table) {

            $table->index(["user_id"], 'fk_alunos_users_idx');

            $table->foreign('user_id', 'fk_alunos_users_principal_idx')
                ->references('id')->on('users')
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
        Schema::dropIfExists('aluno');
    }
}
