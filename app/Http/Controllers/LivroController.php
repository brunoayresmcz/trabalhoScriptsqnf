<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller {
    
    /**
     * =========== CRUD ==============
     */

    /** Abre a View com a listagem de livros */
    public function listar(Request $request) {

        //Paginação
        $exibirPorPagina = 5;
        $offset = ($exibirPorPagina * ($request->query('page', 1)-1));
        $paginacao = Livro::paginate($exibirPorPagina); //Exibe 5 elementos por página

        $livros = Livro::limit($exibirPorPagina) //Quantos valores devem ser exibido 
                        ->offset($offset) //Começa a exibir a apartir de qual valor
                        ->get();
        
        $dados = [
            'submenu'   => 'listar',
            'livros'    => $livros,
            'paginacao' => $paginacao
        ];
        return view('livros.listar', $dados);
    }
    
    /** Abre a view com os dados do livro selecionado */
    public function visualizar(int $id) {
        $dados['livro'] = Livro::find($id);
        switch($dados['livro']['categoria']) {
            case 1: $dados['livro']['categoria_nome'] = 'Terror'; break;
            case 2: $dados['livro']['categoria_nome'] = 'Drama'; break;
            case 3: $dados['livro']['categoria_nome'] = 'Romance'; break;
            case 4: $dados['livro']['categoria_nome'] = 'Ficção Cientifica'; break;
            case 5: $dados['livro']['categoria_nome'] = 'Pintura'; break;
       }
         
        return view('livros.visualizar', $dados);
    }
   
    /** Abre a view com a tela de cadastro */
    public function cadastrar() {
        $dados = ['submenu' => 'cadastrar', 'livro' => new Livro()];
        return view('livros.cadastro', $dados);
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
        
        //Cadastra e recupera o livro cadastrado
        $livro = Livro::create($request->all());
        
        //Salva capa do livro
        $this->salvaCapa($livro, $request);

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

        //Checa se houve tentativa de cadastrar nova capa 
        if ($request->has('capa')) {
            $livro = Livro::find($id);
            $this->salvaCapa($livro, $request);
        }

        return redirect()->route('livros.listar');
    }

    /** Remove um livro do banco */
    public function excluir($id) {
        Livro::destroy($id);
        return redirect()->route('livros.listar');
    }

    /**
     * =========== EXTRA ==============
     */

     /** 
     * Função usada para fazer upload e salvar no banco a capa do livro
     */
    private function salvaCapa(Livro $livro, Request $request): void {
        //Salvando imagem da capa com um nome exclusivo
        $ext = $request->capa->extension();
        $nomeLivro = 'livro_'.$livro->id.'.'.$ext;
        $request->capa->storeAs('public\livros', $nomeLivro);

        //Salvando o nome do arquivo da imagem no banco
        $livro->capa = $nomeLivro;
        $livro->save();
    }
}
