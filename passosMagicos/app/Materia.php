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
        return $this->hasone(ProfMateria::class);
    }

    public function aluno_tarefa()
    {
        return $this->hasone(AlunoTarefa::class);
    }

    public function tarefas()
    {
        return $this->hasMany(Tarefa::class);
    }

    public function aluno_materia_observacao()
    {
        return $this->hasone(AlunoMateriaObservacao::class);
    }

    // public function aluno_materia()
    // {
    //     return $this->hasone(AlunoMateria::class);
    // }

    public function aluno_materia_presenca()
    {
        return $this->hasMany(AlunoMateriaPresenca::class);
    }

    public function aluno_materia_nota()
    {
        return $this->hasMany(AlunoMateriaNota::class);
    }
}
