<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller {

    /** Abre a view da tela de login */
    public function login() {
        return view('login');
    }
    
    /** Tenta realizar o login */
    public function logar(Request $request) {

        if ($request->email == 'teste@teste.com' && $request->senha == '123456') {
            session(['usuario' => 'Carlos']);
            return redirect()->route('livros.listar');
        }
        return redirect()->route('login')->with('erro', 'Senha ou Login inválido');
    }

    /** Desloga o usuário */
    public function logout(Request $request) {
        $request->session()->flush();
        return redirect()->route('login'); 
    }
}
