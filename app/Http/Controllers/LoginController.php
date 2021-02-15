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
    public function logar() {
        echo 'Realizar login';
    }

    /**
     * Realiza o logout
     */
    public function logout() {
        return view('login');
    }
}
