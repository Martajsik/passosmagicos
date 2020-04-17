<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Aluno_tarefa;
use App\Tarefa;
use App\Prof_materia;

class Unidade extends Model
{
    //
    protected $fillable = [
        "cnpj",
        "rua",
        "numero",
        "bairro",
        "cep",
        "cidade",
        "uf"
    ];

    public function aluno_tarefa(){
        return $this-> hasone(Aluno_tarefa::class);
    }

    public function tarefa(){
        return $this-> hasMany(Tarefa::class);
    }

    public function prof_materia(){
        return $this-> hasMany(Prof_materia::class);
    }
}
