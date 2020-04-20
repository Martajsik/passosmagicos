<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlunoTarefa extends Model
{
    //
    protected $fillable = [
        "data",
        "unidade_id",
        "cadastro_id",
        "materia_id"
    ];

    public function materia()
    {
        return $this->hasOne(Materia::class);
    }

    public function cadastro()
    {
        return $this->hasOne(Cadastro::class);
    }

    public function unidade()
    {
        return $this->hasOne(Unidade::class);
    }
}
