<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivrosController extends Controller {
    
    public function novo() {
        return view('livros.cadastro');
    }

    public function listar() {
        $dados['livros'] = [
            ['id' => 1, 'isbn' => '999999999', 'autor' => 'Autor 1', 'titulo' => 'Livro 1'],
            ['id' => 2, 'isbn' => '888888888', 'autor' => 'Autor 2', 'titulo' => 'Livro 2']
        ];
        return view('livros.listar', $dados);
    }

    public function editar(int $id) {
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

    public function excluir(int $id) {
     
    }
}
