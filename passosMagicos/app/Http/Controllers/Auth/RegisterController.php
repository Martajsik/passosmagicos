<?php

namespace App\Http\Controllers\Auth;

use App\Aluno;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;



class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/adm/professor/lista';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            // 'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $cadastro)
    {
        // $newCadastroUser = new User();
        // $newCadastroUser->fill($cadastro);
        // $newCadastroUser['password'] = Hash::make($cadastro['password']);
        // $newCadastroUser->save();

        // if ($cadastro['tipo'] == 2) { //aluno

        //     $newCadastroAluno = new Aluno();
        //     $newCadastroAluno->nome_pais = $cadastro['nome_pais'];
        //     $newCadastroAluno->contato = $cadastro['contato'];
        //     $newCadastroAluno->user_id = $newCadastroUser->id;
        //     $newCadastroAluno->save();
        // }
        // return $newCadastroUser;
    }
}
