<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\User;
use Illuminate\Http\Request;

class AdmController extends Controller
{
    public function mostrarHome()
    {
        return view('homeAdm'); //precisa ser criada
    }

    //AÇÕES PARA O PROFESSOR

    public function cadastroProfessor()
    {
        return view('cadastro_professor');
    }


    // public function cadastrar(Request $request)
    // {

    //     $cadastro = $request->all();


    //         $newCadastroUser = new User();
    //         $newCadastroUser->fill($cadastro)->save();

    //      if($cadastro['tipo'] == 2) { //aluno

    //         $newCadastroAluno = new Aluno();
    //         $newCadastroAluno->nome_pais = $request->get('nome_pais');
    //         $newCadastroAluno->contato = $request->get('contato');
    //         $newCadastroAluno->user_id = $newCadastroUser->id;
    //         $newCadastroAluno->save();
    //          }
    //         return redirect('adm/home');



    // }

    public function listaProfessores(Request $request)
    {
        //logica mostrar todos os prof cadastrados no BD
        $lista = User::all();
        return view('listaProfessores', ['lista' => $lista]);
    }

    public function listaProfessor(Request $request,$id)
    {

        // $lista->fill($request->all());
        // $lista = $request->all();
        // $lista->fill($lista);
        // return view('listaProfessores', compact('lista', $lista));

        // mostra um professor em específico no BD a partir do id dele

    }

    public function editaProfessor($id)
    {
        return view('editProfessor');
    }

    public function editarProfessor(Request $request, $id)
    {
        //editar um professor especifico
        $editar = User::find($id);

        $editar->fill($request->all());

        $editar->save();

        // return view('editProfessor');
        return view('editProfessor', ['editar' => $editar]);
    }

    public function excluirProfessor($id)
    {
        //excluir do banco de dados
        $excluir = User::findOrFail($id);
        $excluir->delete();

        return view('listaProfessores', ['lista' => $excluir]);
        //testar o redirect
    }


    //AÇÕES PARA O ALUNO:

    public function cadastroAluno()
    {
        return view('cadastro_aluna');
    }

    public function listaAlunos(Request $request)
    {
        $lista = Aluno::all(); //antes aqui Aluno::all()
        return view('listaAlunos', ['lista' => $lista]);
        // $lista->fill($request->all());
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
        return view('editaAluno');
        //precisa fazer essa view
    }

    public function editarAluno(Request $request, $id)
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
