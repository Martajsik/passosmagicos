<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlunoMateriaObservacao extends Model
{
    //
    protected $fillable = [
        "obvservacoes",
        "data",
        "materia_id",
        "cadastro_id"
    ];

    public function materia()
    {
        return $this->hasOne(Materia::class);
    }

    public function cadastro()
    {
        return $this->hasOne(Cadastro::class);
    }
}
