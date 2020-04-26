<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    //
    public function mostrarHome(){
        return view('home');
    }

    public function mostrarLogin(){
        return view('login');
    }

    public function receberLogin(Request $request, $id){
        //vai receber os dados do campo do login
        //vai verificar se existe no BD,
        //caso existe vai direcionar de acordo com o tipo de user
        //caso nao existe continuará na pag de login e
        //vai mostrar mensagem de erro. (ex: 'email ou senha incorretos')

    }
}
