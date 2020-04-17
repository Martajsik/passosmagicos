<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Materia;
use App\Cadastro;

class Aluno_materia_presenca extends Model
{
    //
    protected $fillable = [
        "data",
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
