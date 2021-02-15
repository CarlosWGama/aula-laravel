<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivrosController extends Controller {
    
    /** 
     * Abre a tela que cadastra um livro 
     */
    public function novo() {
        return view('livros.cadastro');
    }

    /** 
     * Salva o livro a ser cadastrado 
     */
    public function cadastrar() {

    }

    /** 
     * Abre a tela que lista os livros 
     */
    public function listar() {
        $dados['livros'] = [
            ['id' => 1, 'isbn' => '999999999', 'autor' => 'Autor 1', 'titulo' => 'Livro 1'],
            ['id' => 2, 'isbn' => '888888888', 'autor' => 'Autor 2', 'titulo' => 'Livro 2']
        ];
        return view('livros.listar', $dados);
    }

    /**
     * Abre a tela de edição de livros
     */
    public function edicao(int $id) {
        $dados = ['livro' => [
                'id'        => 1,
                'isbn'      => 23123123123,
                'categoria' => 3,
                'titulo'    => 'Titulo 1',
                'autor'     => 'Autor 1',
                'resumo'    => 'Bla bla bla bla bla bla'
            ]
        ];
        
        return view('livros.edicao', $dados);
    }

    /**
     * Salva o livro a ser editado
     */
    public function editar(int $id) {

    }

    /**
     * Abre a tela de visualização de livros
     */
    public function visualizar(int $id) {
        $dados = ['livro' => [
                    'id'        => 1,
                    'titulo'    => 'Titulo 1',
                    'autor'     => 'Autor 1',
                    'resumo'    => 'Bla bla bla bla bla bla'
                ]
        ];
        return view('livros.visualizar', $dados);
    }

    /**
     * Exclui um livro
     */
    public function excluir(int $id) {
     
    }
}
