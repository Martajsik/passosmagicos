<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\AlunoMateriaNota;
use App\Materia as AppMateria;
use App\User;
use Illuminate\Http\Request;
use Materia;

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
    public function mostrarProfessor($id){ //verificar
        $professor = User::find($id);
        return redirect('professor.home',['professor'=>$professor]);
    }

    public function listaTurmas(Request $request){

    }
    public function listaAlunos(Request $request){
        $lista = Aluno::all();
        $lista_total = User::all();
        return redirect('professor.alunos', ['lista' => $lista, 'lista_total' => $lista_total]);
        //so copiar a estrutura do listaAlunos e tirar o botao
    }

    public function mostrarNotas(){
        $lista_notas = AlunoMateriaNota::all();
        return redirect('professor.notas');
    }

    public function subirNotas(Request $request){
        //form com notas de cada aluno
    }

    public function listaTarefas(Request $request){

    }

    public function subirTarefas(Request $request){

    }

    public function listaPresenca(Request $request){

    }

    public function subirPresenca(Request $request){

    }

    public function listaAnotacoes(Request $request){

    }

    public function subirAnotacoes(Request $request){

    }

    public function listarMaterias(Request $request){
        $materias = AppMateria::all();
        return redirect('professor.materias',['materias'=>$materias]);
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
