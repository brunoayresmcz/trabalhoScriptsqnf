<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller {

    public function login(Request $request) {
        return view('login');
    }
    
    public function logar(Request $request) {
        if ($request->email == 'teste@teste.com' && $request->senha == '123456')
            return redirect()->route('livros.listar');
        return redirect()->route('login')->with('erro', 'Senha ou Login inválido');
    }
}
