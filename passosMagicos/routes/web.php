<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('aluna', 'AlunaController'); // aqui estão todas as rotas referente a aluna
Route::resource('professor', 'ProfessorController');//aqui estão todas as rotas referente a professor
Route::resource('adm', 'AdmController');//aqui estão todas as rotas referente ao adm

// Route::get('aluna/cadastro','AlunaController@create');
// Route::post('aluna/cadastro','AlunaController@store');



// Route::get('professor/cadastro','ProfessorController@create');
// Route::post('professor/cadastro', 'ProfessorController@store');


// Route::get('professor/dashboard','ProfessorController@show');

// Route::get('aluna/dashboard','AlunaController@show');

// Route::get('/',function(){
//     return view('home');
// });
// Route::get('/login',function(){
//     return view('login');
// });
// Route::get('/materia',function(){
//     return view('materia');
// });


