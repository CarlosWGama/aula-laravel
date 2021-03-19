<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivrosController extends Controller {
    
    /** 
     * Abre a tela que cadastra um livro 
     */
    public function novo() {
        $dados['livro'] = new Livro;
        return view('livros.cadastro', $dados);
    }

    /** 
     * Salva o livro a ser cadastrado 
     */
    public function cadastrar(Request $request) {

        //Valida
        $request->validate([
            'isbn'  => 'required|integer',
            'titulo'=> 'required',
            'autor' => 'required',
            'resumo'=> 'required',
            'capa'  => 'required|image'
        ]);

        $livro = Livro::create($request->all());

        //Faz upload de arquivo
        if ($request->has('capa')) {
            $nomeArquivo = 'livro_'.$livro->id.'.'.$request->capa->extension();
            $request->capa->storeAs('public/livros/', $nomeArquivo);
            $livro->capa = $nomeArquivo;
        }

        return redirect()->route('livros.listar')->with('sucesso', 'Livro cadastrado com sucesso');

    }

    /** 
     * Abre a tela que lista os livros 
     */
    public function listar(Request $request) {
        if ($request->has('titulo'))
            $dados['livros'] = Livro::where('titulo', 'like', '%'.$request->titulo.'%')->get();
        else
            $dados['livros'] = Livro::all();
        $dados['titulo'] = $request->titulo;
        return view('livros.listar', $dados);
    }

    /**
     * Abre a tela de edição de livros
     */
    public function edicao(int $id) {
        $dados['livro'] = Livro::find($id);
        return view('livros.edicao', $dados);
    }

    /**
     * Salva o livro a ser editado
     */
    public function editar(Request $request, int $id) {

        $request->validate([
            'isbn'  => 'required|integer',
            'titulo'=> 'required',
            'autor' => 'required',
            'resumo'=> 'required',
            'capa'  => 'image'
        ]);

        Livro::where('id', $id)->update($request->except('_token'));

        //Faz upload de arquivo
        if ($request->has('capa')) {
            $nomeArquivo = 'livro_'.$id.'.'.$request->capa->extension();
            $request->capa->storeAs('public/livros/', $nomeArquivo);
            Livro::where('id', $id)->update(['capa' => $nomeArquivo]);
        }

        return redirect()->route('livros.listar')->with('sucesso', 'Livro atualizado com sucesso');
    }

    /**
     * Abre a tela de visualização de livros
     */
    public function visualizar(int $id) {
        $dados['livro'] = Livro::find($id);
        return view('livros.visualizar', $dados);
    }

    /**
     * Exclui um livro
     */
    public function excluir(int $id) {
        Livro::destroy($id);
        return redirect()->route('livros.listar')->with('sucesso', 'Livro excluído com sucesso');
    }
}
