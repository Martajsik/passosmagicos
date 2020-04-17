<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Prof_materia;
use App\Aluno_tarefa;
use App\Tarefa;
use App\Aluno_materia_observacao;
use App\Aluno_materia;
use App\Aluno_materia_presenca;
use App\Aluno_materia_nota;

class Materia extends Model
{
    //
    protected $fillable = [
        'nome_materia',
        'ano'
    ];

    public function prof_materia()
    {
        return $this->hasone(Prof_materia::class);
    }

    public function aluno_tarefa()
    {
        return $this->hasone(Aluno_tarefa::class);
    }

    public function tarefas()
    {
        return $this->hasMany(Tarefa::class);
    }

    public function aluno_materia_observacao()
    {
        return $this->hasone(Aluno_materia_observacao::class);
    }

    public function aluno_materia()
    {
        return $this->hasone(Aluno_materia::class);
    }

    public function aluno_materia_presenca()
    {
        return $this->hasMany(Aluno_materia_presenca::class);
    }

    public function aluno_materia_nota()
    {
        return $this->hasMany(Aluno_materia_nota::class);
    }
}
