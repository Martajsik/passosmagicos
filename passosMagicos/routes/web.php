<?php

use Illuminate\Support\Facades\Route;




Route::group(['prefix' => '/'], function () {
    Route::get('home','BaseController@mostrarHome');//mostra pag home
    Route::get('login','BaseController@mostrarLogin');//mostra pag login
    Route::post('login','BaseController@receberLogin');//efetua o login

    Route::group(['prefix' => 'adm'], function () {
        Route::get('/home','AdmController@mostrarHome');//mostra a dash do adm

        Route::group(['prefix' => '/professor'], function () {
            Route::get('/cadastro', 'AdmController@cadastroProfessor'); //mostra a view cadastro
            Route::post('/cadastro', 'AdmController@cadastrar')->name('cadastro'); //efetua o cadastro(serve tanto p aluno como prof,vai ser a msm função do controller)

            Route::get('/lista', 'AdmController@listaProfessores'); //mostra a lista de professores

            Route::get('/{id}', 'AdmController@listaProfessor'); //mostra um professor em especifico

            Route::get('/{id}/editar', 'AdmController@editaProfessor'); //mostra a view de editar prof especifico
            Route::put('/{id}/editar', 'AdmController@editarProfessor'); //efetua a edicao do prof especifico

            Route::delete('/{id}/excluir', 'AdmController@excluirProfessor'); //efetua a exclusão

        });

        Route::group(['prefix' => '/aluno'], function () {
            Route::get('/cadastro', 'AdmController@cadastroAluno'); //mostra a view cadastro
            Route::post('/cadastro', 'AdmController@cadastrar'); //efetua o cadastro(serve tanto p aluno como prof,vai ser a msm função do controller)

            Route::get('/lista', 'AdmController@listaAlunos'); //mostra a lista de alunoes

            Route::get('/{id}', 'AdmController@listaAluno'); //mostra um aluno em especifico

            Route::get('/{id}/editar', 'AdmController@editaAluno'); //mostra a view de editar prof especifico
            Route::put('/{id}/editar', 'AdmController@editarAluno'); //efetua a edicao do prof especifico

            Route::delete('/{id}/excluir', 'AdmController@excluirAluno'); //efetua a exclusão

        });
    });


});

