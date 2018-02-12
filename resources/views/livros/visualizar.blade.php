
	@extends('template')
	@section('conteudo_principal')
		<div class="jumbotron">

			<!-- TITULO -->
			<div class="page-header">
				<h1>{{$livro->titulo}}</h1>
				<span class="label label-primary">{{$livro->autor}}</span>
				<span class="label label-default">{{$livro->categoria_nome}}</span>
			</div>

			<!-- CAPA -->
			<img src="{{url('storage/livros/'.$livro->capa)}}" class="img-rounded" id="capa-livro" alt="Título">

			<!-- DESCRICAO -->
			<div id="resumo-livro">
				<p>{{$livro->resumo}}</p>

			</div>
		</div>
	</div>
	@endsection