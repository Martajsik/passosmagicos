<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdmController extends Controller
{
    public function mostrarHome()
    {
        return view('homeAdm');
    }


    public function cadastroProfessor()
    {
        return view('cadastro_professor');
    }


    public function cadastrar(Request $request)
    {
        $cadastro = $request->all();
        $newCadastroUser = new User();
        $newCadastroUser->fill($cadastro);
        $newCadastroUser->tipo = 1;
        $newCadastroUser['password'] = Hash::make($cadastro['password']);
        $newCadastroUser->save();
        return redirect('/adm/professor/lista');
    }

    public function listaProfessores(Request $request)
    {
        $lista_total = User::all();
        return view('listaProfessores', ['lista_total' => $lista_total]);
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
        return redirect('/adm/professor/lista');

        //return redirect('listaProfessores', ['excluir' => $excluir]);
        //testar o redirect
    }

    public function cadastroAluno()
    {
        return view('cadastro_aluna');
    }

    public function cadastrarAluno(Request $request)
    {
        $cadastro = $request->all();
        $newCadastroUser = new User();
        $newCadastroUser->fill($cadastro);
        $newCadastroUser['password'] = Hash::make($cadastro['password']);
        $newCadastroUser->save();

        if ($cadastro['tipo'] == 2) { //aluno

            $newCadastroAluno = new Aluno();
            $newCadastroAluno->nome_pais = $cadastro['nome_pais'];
            $newCadastroAluno->contato = $cadastro['contato'];
            $newCadastroAluno->user_id = $newCadastroUser->id;
            $newCadastroAluno->save();
        }
        return redirect('/adm/aluno/lista');
    }

    public function listaAlunos(Request $request)
    {
        $lista_alunos = Aluno::all();
        $lista_users = User::all();
        return view('listaAlunos', ['lista_alunos' => $lista_alunos,'lista_users' => $lista_users]);
    }

    public function listaAluno($id)
    {
        $lista = Aluno::find($id);

        return $lista;
        // mostra um aluno em específico no BD a partir do id dele
    }

    public function editaAluno($id)
    {
        return view('adm.aluno.edita');
    }

    public function editarAluno(Request $request, $id)
    {
        $editara = Aluno::find($id);
        $editaraUserId = $editara['user_id'];
        $usuario = User::find($editaraUserId);

        $editara->fill($request->all());
        $usuario->fill($request->all());
        $usuario->save();
        $editara->save();


        return view('editaAluno', [
            'editara' => $editara, 'usuario' => $usuario
        ]);
        //editar um aluno especifico
        // }
    }

    public function excluirAluno($id)
    {

        $excluira = Aluno::findOrFail($id);
        $excluira->delete();
        return redirect('/adm/aluno/lista');

        //return view('editaAluno');
        //excluir do banco de dados
    }
}
