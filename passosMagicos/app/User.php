<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'cpf',
        'rg', 'tipo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function aluno_materia_observacao()
    {
        return $this->hasOne(Aluno_materia_observacao::class);
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
        return $this->hasOne(ProfMateria::class);
    }

    public function aluno_tarefa()
    {
        return $this->hasOne(Aluno_tarefa::class);
    }

    public function materias()
    {
        return $this->hasMany(Materia::class);
    }

}
