<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfMateriaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'prof_materia';

    /**
     * Run the migrations.
     * @table prof_materia
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('cadastro_id');
            $table->integer('materia_id');
            $table->integer('unidade_id');

            $table->index(["materia_id"], 'fk_prof_materia_materia1_idx');

            $table->index(["unidade_id"], 'fk_prof_materia_unidade1_idx');

            $table->index(["cadastro_id"], 'fk_prof_materia_cadastro1_idx');


            $table->foreign('cadastro_id', 'fk_prof_materia_cadastro1_idx')
                ->references('id')->on('cadastro')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('materia_id', 'fk_prof_materia_materia1_idx')
                ->references('id')->on('materia')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('unidade_id', 'fk_prof_materia_unidade1_idx')
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
