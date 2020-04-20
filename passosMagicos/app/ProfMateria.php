<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfMateria extends Model
{
    //
    protected $fillable = [
        "materia_id",
        "unidade_id",
        "cadastro_id" //verificar sobre o cadastro. Não lembro o motivo de excluir o cadastro.
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
        return $this->belongsTo(Unidade::class);
    }
}
