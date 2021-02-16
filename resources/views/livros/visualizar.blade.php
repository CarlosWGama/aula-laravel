@extends('template')
	
@section('titulo', 'Visualizar - ' . $livro['titulo'])

@push('css')
	<style>
		#informacoes-livro {
			display: flex;
			flex-direction: row;
			justify-content: space-between;
		}
	</style>
@endpush

@section('conteudo_principal')
	<div class="jumbotron">

		<!-- TITULO -->
		<div id="informacoes-livro" class="page-header">
			<div>
				<h1>{{$livro['titulo']}}</h1>
				<span class="label label-primary">{{$livro['autor']}}</span>
				<span class="label label-default">Terror</span>
			</div>
			@if(isset($livro['capa']))
			<img src="{{$livro['capa']}}" />
			@endif
		</div>

		<!-- DESCRICAO -->
		<div id="resumo-livro">
			<p>{{$livro['resumo']}}</p>
		</div>
	</div>
@endsection
