<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlunoMateriaPresenca extends Model
{
    //
    protected $fillable = [
        "data",
        "cadastro_id",
        "materia_id"
    ];

    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }

    public function cadastro()
    {
        return $this->hasOne(Cadastro::class);
    }
}
