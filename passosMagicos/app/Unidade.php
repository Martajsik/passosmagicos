<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Aluno_tarefa;
use App\Tarefa;
use App\Prof_materia;

class Unidade extends Model
{
    //
    protected $fillable = ["nome"];

    public function aluno_tarefa(){
        return $this-> hasone(AlunoTarefa::class);
    }

    public function tarefa(){
        return $this-> hasMany(Tarefa::class);
    }

    public function prof_materia(){
        return $this-> hasMany(ProfMateria::class);
    }
}
