<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroController extends Controller {
    
    /** Abre a View com a listagem de livros */
    public function listar() {
        $livros = [
            ['id'=> '1', 'isbn' => '1111111', 'titulo' => 'Harry Potter', 'autor'=> 'J. K. Rowling'],
            ['id'=> '2', 'isbn' => '2222222', 'titulo' => 'Senhor dos Aneis', 'autor'=> 'J. R. R. Tolkien']
        ];
        return view('livros.listar', ['livros' => $livros]);
    }
    
    /** Abre a view com os dados do livro selecionado */
    public function visualizar(int $id) {
        return view('livros.visualizar');
    }
   
    /** Abre a view com a tela de cadastro */
    public function cadastrar() {
        return view('livros.cadastro');
    }

    /** Tentar cadastrar o livro */
    public function salvar(Request $request) {
        $request->validate([
            'isbn'      => 'required|integer',
            'titulo'    => 'required',
            'autor'     => 'required',
            'resumo'    => 'required',
            'capa'      => 'image|required'
        ]);
        return redirect()->route('livros.listar');
    }

    /** Abre a tela com a view de edição do livro */
    public function editar(int $id) {
        return view('livros.edicao');
    }

    /** Tenta atualizar o livro */
    public function atualizar(Request $request) {
        $request->validate([
            'isbn'      => 'required|integer',
            'titulo'    => 'required',
            'autor'     => 'required',
            'resumo'    => 'required',
            'capa'      => 'image|max:1024'
        ]);
        return redirect()->route('livros.listar');
    }
}
