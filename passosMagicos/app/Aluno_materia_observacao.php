<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Materia;
use App\Cadastro;

class Aluno_materia_observacao extends Model
{
    //
    protected $fillable = [
        "obvservacoes",
        "data",
    ];

    public function materia(){
        return $this-> hasOne(Materia::class);
    }

    public function cadastro(){
        return $this-> hasOne(Cadastro::class);
    }
}
