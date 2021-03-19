@extends('template')
	
@section('titulo', 'Livros')

@section('conteudo_principal')
			<h1>Livros</h1>
			<h2>Olá {{session('usuario')}}</h2>

			@if(session('sucesso'))
			<p class="alert alert-success">{{session('sucesso')}}</p>
			@endif

			<form action="{{route('livros.listar')}}" method="get">
				<div class="form-group">
					<label for="campo-isbn">Buscar livro:</label>
					<input type="text" class="form-control" value="{{$titulo}}" name="titulo" id="campo-isbn">
				</div>
				<button type="submit" class="btn btn-default btn-success">Buscar</button>
			</form>

			<table class="table table-hover">
			    <thead>
			      <tr>
			        <th>ISBN</th>
			        <th>Título</th>
			        <th>Categoria</th>
			        <th>Autor</th>
			        <th width="10%">Opções</th>
			      </tr>
			    </thead>
			    <!-- DADOS -->
			    <tbody>
					@foreach ($livros as $livro)
					<tr>
						<td>{{$livro->isbn}}</td>
						<td>{{$livro->titulo}}</td>
						<td>{{$livro->categoria->categoria}}</td>
						<td>{{$livro->autor}}</td>
						<td>
							<a href="{{route('livros.visualizar', ['id' => $livro->id])}}">Visualizar</a>
							<a href="{{route('livros.edicao', ['id' => $livro->id])}}">Editar</a>
							<a href="{{route('livros.excluir', ['id' => $livro->id])}}">Excluir</a>
						</td>
					</tr>	
					@endforeach	 
			    </tbody>
			    <!-- DADOS [FIM] -->
			</table>

			{{$livros->links()}}
@endsection