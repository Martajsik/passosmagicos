<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfMateria extends Model
{
    //
    protected $fillable = [
        "materia_id",
        "unidade_id",
        "user_id"
    ];

    public function materia()
    {
        return $this->hasOne(Materia::class);
    }

    public function cadastro()
    {
        return $this->hasOne(User::class);
    }

    public function unidade()
    {
        return $this->belongsTo(Unidade::class);
    }

    
}
