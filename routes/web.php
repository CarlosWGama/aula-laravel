<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'LoginController@logar');


Route::group(['prefix' => 'livros'], function () {
    Route::get('/', 'LivrosController@listar')->name('livros.listar');
    Route::get('/novo',  'LivrosController@novo')->name('livros.novo');
    Route::get('/editar/{id}',  'LivrosController@editar')->name('livros.editar');
    Route::get('/visualizar/{id}',  'LivrosController@visualizar')->name('livros.visualizar');
});