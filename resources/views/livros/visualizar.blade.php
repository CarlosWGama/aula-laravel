@extends('template')
	
@section('titulo', 'Visualizar - ' . $livro['titulo'])

@section('conteudo_principal')
	<div class="jumbotron">

		<!-- TITULO -->
		<div class="page-header">
			<h1>{{$livro['titulo']}}</h1>
			<span class="label label-primary">{{$livro['autor']}}</span>
			<span class="label label-default">Terror</span>
		</div>

		<!-- DESCRICAO -->
		<div id="resumo-livro">
			<p>{{$livro['resumo']}}</p>
		</div>
	</div>
@endsection
