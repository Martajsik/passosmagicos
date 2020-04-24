<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    //
    protected $fillable = [
        "nome_pais",
        "contato",
        "user_id",
    ];

    public function user(){
        return $this->hasOne(User::class);
    }
}
