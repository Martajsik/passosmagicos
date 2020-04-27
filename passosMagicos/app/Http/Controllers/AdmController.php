<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmController extends Controller
{
    public function mostrarHome()
    {
        return view('adm_dashboard'); //precisa ser criada
    }

    //AÇÕES PARA O PROFESSOR

    public function cadastroProfessor(){
        return view('cadastro_professor');
    }

    public function cadastrar(Request $request)
    {
        //efetua o cadastro(serve tanto p aluno como prof,vai ser a msm função do controller)
    }

    public function listaProfessores()
    {
        //logica mostrar todos os prof cadastrados no BD
    }

    public function listaProfessor(Request $requeste,$id)
    {
        // mostra um professor em específico no BD a partir do id dele
    }

    public function editaProfessor($id){
        //logica se o professor existe no BD ou nao. Aparecer o nome dele.
        return view('editProfessor');
    }

    public function editarProfessor(Request $request,$id){
        //editar um professor especifico
    }

    public function excluirProfessor($id){
        //excluir do banco de dados
    }


    //AÇÕES PARA O ALUNO:

    public function cadastroAluno()
    {
        return view('cadastro_aluna');
    }

    public function listaAlunos()
    {
        $lista->fill($request->all());


        return view('listaAlunos' compact('lista'));
        //logica mostrar todos os alunos cadastrados no BD
    }

    public function listaAluno($id)
    {
        $lista = Aluno::find($id);
        
        return $lista;
        // mostra um aluno em específico no BD a partir do id dele
    }

    public function editaAluno($id)
    {
        //logica se o aluno existe no BD ou nao. Aparecer o nome dele.
        return view('editAluno');
        //precisa fazer essa view
    }

    public function editarAluno(Request $request,$id)
    {
        $editara = Aluno::find($id);

        $editara->fill($request->all());

        $editara->save();

        return view('editaAluno');

        //editar um aluno especifico
    }

    public function excluirAluno($id)
    {
        
        $excluira = Aluno::findOrFail($id);
        $excluira->delete();

        return view('editaAluno');
        //excluir do banco de dados
    }



}
