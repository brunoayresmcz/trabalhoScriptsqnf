<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroController extends Controller {
    
    public function listar() {
        $livros = [
            ['id'=> '1', 'isbn' => '1111111', 'titulo' => 'Harry Potter', 'autor'=> 'J. K. Rowling'],
            ['id'=> '2', 'isbn' => '2222222', 'titulo' => 'Senhor dos Aneis', 'autor'=> 'J. R. R. Tolkien']
        ];
        return view('livros.listar', ['livros' => $livros]);
    }

    public function visualizar(int $id) {
        return view('livros.visualizar');
    }
   
    public function cadastrar() {
        return view('livros.cadastro');
    }

    public function editar(int $id) {
        return view('livros.edicao');
    }
}
