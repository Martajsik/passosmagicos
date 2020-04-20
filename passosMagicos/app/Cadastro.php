<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


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
        return $this->hasOne(AlunoMateriaObservacao::class);
    }

    public function aluno_materia()
    {
        return $this->hasOne(Materia::class);//verificar se é isso mesmo!
    }

    public function aluno_materia_presenca()
    {
        return $this->hasOne(AlunoMateriaPresenca::class);
    }
    public function aluno_materia_nota()
    {
        return $this->hasMany(AlunoMateriaNota::class);
    }

    public function prof_materia()
    {
        return $this->hasOne(ProfMateria::class);
    }

    public function aluno_tarefa()
    {
        return $this->hasOne(AlunoTarefa::class);
    }

}
