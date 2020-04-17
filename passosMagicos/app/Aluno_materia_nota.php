<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cadastro;
use App\Materia;

class Aluno_materia_nota extends Model
{
    //
    protected $fillable = [
        "periodo",
        "nota",
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
