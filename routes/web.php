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

Route::group(['prefix' => 'livros'], function () {
    Route::get('/', function() { echo 'Listar'; })->name('livros.listar');
    Route::get('/novo',  function() { echo 'Cadastrar'; })->name('livros.novo');
    Route::get('/editar/{id}',  function() { echo 'Editar'; })->name('livros.editar');
    Route::get('/visualizar/{id}',  function() { echo 'Visualizar'; })->name('livros.visualizar');
});