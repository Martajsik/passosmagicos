<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Aluno_materia_observacao;
use App\Aluno_materia;
use App\Aluno_materia_presenca;
use App\Aluno_materia_nota;
use App\Prof_materia;
use App\Aluno_tarefa;

class Cadastro extends Model
{
    //
    protected $fillable = [
        'nome',
        'email',
        'cpf',
        'rg',
        'tipo',
        'turma'
    ];

    public function aluno_materia_observacao()
    {
        return $this->hasOne(Aluno_materia_observacao::class);
    }

    public function aluno_materia()
    {
        return $this->hasOne(Aluno_materia::class);
    }

    public function aluno_materia_presenca()
    {
        return $this->hasOne(Aluno_materia_presenca::class);
    }
    public function aluno_materia_nota()
    {
        return $this->hasMany(Aluno_materia_nota::class);
    }

    public function prof_materia()
    {
        return $this->hasOne(Prof_materia::class);
    }

    public function aluno_tarefa()
    {
        return $this->hasOne(Aluno_tarefa::class);
    }

}
