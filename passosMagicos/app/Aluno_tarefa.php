<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Materia;
use App\Cadastro;
use App\Unidade;

class Aluno_tarefa extends Model
{
    //
    protected $fillable = [
        "data"
    ];

    public function materia()
    {
        return $this->hasOne(Materia::class);
    }

    public function cadastro()
    {
        return $this->hasOne(Cadastro::class);
    }

    public function unidade(){
        return $this->hasOne(Unidade::class);
    }
}
