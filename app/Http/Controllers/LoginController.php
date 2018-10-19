<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller {

    /** Abre a view da tela de login */
    public function login() {
        return view('login');
    }
    public function cadastrar() {
        return view('registro');
    }
    
    
    /** Tenta realizar o login */
    public function logar(Request $request) {

        if ($request->username == 'teste@educ.com' && $request->password == '123456') {
            return redirect()->route('sismain');
        }else
        return redirect()->route('login')->with('erro', 'Senha ou Login inválido');
    }

    /** Desloga o usuário */
    public function logout(Request $request) {
        return redirect()->route('login'); 
    }
}
