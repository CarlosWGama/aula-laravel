<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller {
    
    /**
     * Abre a tela de login
     */ 
    public function login() {
        return view('login');
    }

    /**
     * Tenta realizar o login
     */
    public function logar(Request $request) {
        if ($request->email == 'teste@teste.com' && $request->senha == '123456')
            return redirect()->route('livros.listar');
        return redirect()->back()->with('erro', 'Login ou senha incorreta');
    }

    /**
     * Realiza o logout
     */
    public function logout() {
        return view('login');
    }
}
