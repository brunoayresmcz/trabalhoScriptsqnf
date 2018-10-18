<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registroController extends Controller {

    /** Abre a view da tela de login */
    public function login() {
        return view('login');
    }
}