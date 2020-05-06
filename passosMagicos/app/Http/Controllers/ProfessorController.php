<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\User;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('dash_prof');
    }

    public function listaTurmas(Request $request){

    }
    public function listaAlunos(Request $request){
        $lista = Aluno::all();
        $lista_total = User::all();
        return view('professor.alunos', ['lista' => $lista, 'lista_total' => $lista_total]);
    }

    public function mostrarNotas(){
       //controller do aluno
    }

    public function subirNotas(){
        //form com notas de cada aluno
    }

    public function listaTarefas(Request $request){
        //controller do aluno
    }

    public function subirTarefas(Request $request){

    }

    public function listaPresenca(Request $request){

    }

    public function subirPresenca(Request $request){

    }

    public function listaAnotacoes(Request $request){
        //no controller aluno
    }

    public function subirAnotacoes(Request $request){

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastro_professor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dash_professor');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
        return view('editProfessor');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
