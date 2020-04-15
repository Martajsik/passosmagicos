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
    public $tableName = 'prof_materias';

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
            $table->integer('unidades_id')->unsigned();
            $table->integer('cadastro_id')->unsigned();
            $table->integer('materia_id')->unsigned();
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
