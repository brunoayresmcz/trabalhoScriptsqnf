
	@extends('template')
	@section('conteudo_principal')
	<h1>Livros</h1>
	<h2>Olá {{session('usuario')}} </h2>

		<table class="table table-hover">
			<thead>
				<tr>
				<th>ISBN</th>
				<th>Título</th>
				<th>Autor</th>
				<th width="10%">Opções</th>
				</tr>
			</thead>
			<!-- DADOS -->
			<tbody>
				@foreach($livros as $livro)
				<tr>
					<td>{{$livro['isbn']}}</td>
					<td>{{$livro['titulo']}}</td>
					<td>{{$livro['autor']}}</td>
					<td>
						<a href="{{route('livros.visualizar', ['id' => $livro['id']])}}">Visualizar</a>
						<a href="{{route('livros.editar', ['id' => $livro['id']])}}">Editar</a>
						<a href="{{route('livros.excluir', ['id' => $livro['id']])}}">Excluir</a>
					</td>
				</tr>
				@endforeach	 
			</tbody>
			<!-- DADOS [FIM] -->
		</table>

		{{$paginacao}}
	@endsection