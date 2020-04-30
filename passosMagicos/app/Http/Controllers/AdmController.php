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
//eu acho que tem que ter apenas uma tela de cadastro com todos os campos, tanto de prof
//como de aluno e de acordo com o tipo: 1 ele vai incluir na tabela users(caso prof) ou
// caso 2 vai inserir na tabela USERS E ALUNO aqui usaremos o full alter join (vai unir as duas tabelas) SELECT * FROM ALUNOS FULL OUTER JOIN USERS ON ALUNOS.ID_USER = USERS_ID.
//Talvez fosse mais fácil incluir todos os dados necessários do aluno na tabela aluno
//e com isso facilitaria? Pq ai o $newCadastro = new Aluno() $newCadastro->fill($cadastro)->save() return redirect('adm/home');

    public function cadastrar(Request $request)
    {

        $cadastro = $request->all();

        if ($cadastro['tipo'] == 1) { //professor
            $newCadastroUser = new User();
            $newCadastroUser->fill($cadastro)->save();
            return redirect('/adm/home');

        } elseif($cadastro['tipo'] == 2) { //aluno
            $newCadastroUser = new User();
            $newCadastroAluno = new Aluno();

            $newCadastroUser->name = $request->get('name');
            $newCadastroUser->email = $request->get('email');
            $newCadastroUser->password = $request->get('password');
            $newCadastroUser->cpf = $request->get('cpf');
            $newCadastroUser->rg = $request->get('rg');
            $newCadastroUser->tipo = $request->get('tipo');
            $newCadastroUser->save();
            $newCadastroUser_id = $newCadastroUser->user_id;

            $newCadastroAluno->nome_pais = $request->get('nome_pais');
            $newCadastroAluno->contato = $request->get('contato');
            $newCadastroAluno->user_id = $newCadastroUser_id;
            $newCadastroAluno->save();

            return redirect('adm/home');

            //Aluno::leftjoin('alunos','alunos.id','=','user_id')
                // ->select('users.*','alunos.*')
                // ->where('alunos.id','=',$user_id)->get()

            // $cadastrando = Aluno::leftjoin('users', 'users.id', '=', 'alunos.user_id')
            //     ->select('alunos.nome_pais','alunos.contato','alunos.user_id','users.id','users.tipo','users.name')->get();
            //     dd($cadastrando);
            // //     ->save();
            // return redirect('/adm/aluno/lista',['cadastrando'=>$cadastrando]);
        }

        //efetua o cadastro(serve tanto p aluno como prof,vai ser a msm função do controller)

    }

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
