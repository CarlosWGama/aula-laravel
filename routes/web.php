<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Models\Categoria;

Route::get('/teste', function () {
    Categoria::create(['categoria' => 'Terror']);
    Categoria::create(['categoria' => 'Drama']);
    Categoria::create(['categoria' => 'Romance']);
    Categoria::create(['categoria' => 'Ficção Científica']);
    Categoria::create(['categoria' => 'Pintura']);
});

Route::get('/categoria', function() {
    $categoria = Categoria::find(1);

    foreach ($categoria->livros as $livro) {
        echo $livro->titulo;
    }
});

Route::get('/', 'LoginController@login')->name('login');
Route::get('/login', 'LoginController@login');
Route::post('/logar', 'LoginController@logar')->name('logar');
Route::get('/logout', 'LoginController@logout')->name('logout');

//Autenticado
Route::middleware(['login'])->group(function () {
    // LIVROS
    Route::group(['prefix' => 'livros'], function () {
        Route::get('/', 'LivrosController@listar')->name('livros.listar');
        Route::get('/novo', 'LivrosController@novo')->name('livros.novo');
        Route::post('/cadastrar', 'LivrosController@cadastrar')->name('livros.cadastrar');
        Route::get('/edicao/{id}', 'LivrosController@edicao')->name('livros.edicao');
        Route::post('/editar/{id}', 'LivrosController@editar')->name('livros.editar');
        Route::get('/excluir/{id}', 'LivrosController@excluir')->name('livros.excluir');
        Route::get('/visualizar/{id}', 'LivrosController@visualizar')->name('livros.visualizar');
    });
});