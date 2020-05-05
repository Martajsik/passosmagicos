<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Ui\AuthRouteMethods;


Route::group(['prefix' => '/'], function () {
    Route::get('home','BaseController@mostrarHome');//mostra pag home
    Route::get('login','BaseController@mostrarLogin')->name('login.show');//mostra pag login
    // Route::post('login','BaseController@receberLogin');//efetua o login

    Route::group(['prefix' => 'adm'], function () {
        Route::get('/home','AdmController@mostrarHome')->name('homeAdm');//mostra a dash do adm

        Route::group(['prefix' => '/professor'], function () {
            Route::get('/cadastro', 'AdmController@cadastroProfessor'); //mostra a view cadastro
            Route::post('/cadastro', 'Auth\RegisterController@create')->name('cadastro'); //efetua o cadastro(serve tanto p aluno como prof,vai ser a msm função do controller)

            Route::get('/lista', 'AdmController@listaProfessores')->name('listaProf'); //mostra a lista de professores

            Route::get('/{id}', 'AdmController@listaProfessor'); //mostra um professor em especifico

            Route::get('/{id}/editar', 'AdmController@editaProfessor'); //mostra a view de editar prof especifico
            Route::post('/{id}/editar', 'AdmController@editarProfessor')->name('edita'); //efetua a edicao do prof especifico

            Route::delete('/{id}/excluir', 'AdmController@excluirProfessor')->name('excluirProf'); //efetua a exclusão

        });

        Route::group(['prefix' => '/aluno'], function () {
            Route::get('/cadastro', 'AdmController@cadastroAluno'); //mostra a view cadastro
            Route::post('/cadastro', 'AdmController@cadastrar')->name('cadastro.aluno'); //efetua o cadastro(serve tanto p aluno como prof,vai ser a msm função do controller)

            Route::get('/lista', 'AdmController@listaAlunos')->name('listaAlunos'); //mostra a lista de alunoes

            Route::get('/{id}', 'AdmController@listaAluno'); //mostra um aluno em especifico

            Route::get('/{id}/editar', 'AdmController@editaAluno'); //mostra a view de editar prof especifico
            Route::post('/{id}/editar', 'AdmController@editarAluno')->name('editaAluno'); //efetua a edicao do prof especifico

            Route::delete('/{id}/excluir', 'AdmController@excluirAluno')->name('excluirAluno'); //efetua a exclusão

        });
    });

    Route::group(['prefix' => 'professor'], function () {
        Route::get('/home','ProfessorController@home')->name('professor.home');
        Route::get('/home/lista/turmas','ProfessorController@listaTurmas')->name('professor.turmas');
        Route::get('/home/lista/alunos','ProfessorController@listaAlunos')->name('professor.alunos');
        Route::get('/home/notas','ProfessorController@mostrarNotas')->name('professor.notas');
        Route::post('/home/notas','ProfessorController@subirNotas')->name('professor.subirNotas');
        

    });


});


Auth::routes();

Route::get('/adm/home', 'AdmController@mostrarHome')->name('home');
// Route::post('adm/professor/cadastro', 'RegisterController@create')->name('cadastro');
