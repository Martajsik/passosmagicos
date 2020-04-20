<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlunoMateriaNota extends Model
{
    //
    protected $fillable = [
        "periodo",
        "nota",
        "cadastro_id",
        "materia_id"
    ];

    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }

    public function cadastro()
    {
        return $this->belongsTo(Cadastro::class);
    }
}
