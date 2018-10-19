<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {

    /** Abre a view da tela do Sistema */
    public function Main() {
        return view('Main');
    }
    public function professorInsert() {
        return view('cadastroProfessor');
    }
    public function user() {
        return view('user');
    }
}

