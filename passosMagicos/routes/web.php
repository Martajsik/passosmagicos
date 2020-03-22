<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('cadastro/aluna',function(){
    return view('cadastro_aluna');
});
Route::get('cadastro/professor',function(){
    return view('cadastro_professor');
});
Route::get('dashaboard/professor',function(){
    return view('dash_prof');
});
Route::get('dashaboard/aluno',function(){
    return view('dash_aluno');
});
Route::get('/',function(){
    return view('home');
});
Route::get('/login',function(){
    return view('login');
});
Route::get('/materia',function(){
    return view('materia');
});


