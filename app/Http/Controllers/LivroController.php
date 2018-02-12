<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller {
    
    /** Abre a View com a listagem de livros */
    public function listar() {
        $livros = Livro::all();
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

        Livro::create($request->all());

        return redirect()->route('livros.listar');
    }

    /** Abre a tela com a view de edição do livro */
    public function editar(int $id) {
        $livro = Livro::find($id);
        return view('livros.edicao', ['livro' => $livro]);
    }

    /** Tenta atualizar o livro */
    public function atualizar(Request $request, $id) {
        $request->validate([
            'isbn'      => 'required|integer',
            'titulo'    => 'required',
            'autor'     => 'required',
            'resumo'    => 'required',
            'capa'      => 'image|max:1024'
        ]);

        Livro::where('id', $id)->update($request->except(['_token']));
        return redirect()->route('livros.listar');
    }

    /** Remove um livro do banco */
    public function excluir($id) {
        Livro::destroy($id);
        return redirect()->route('livros.listar');
    }
}
