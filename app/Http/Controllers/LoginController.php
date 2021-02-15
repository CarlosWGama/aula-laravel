<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller {
    //
    public function login() {
        return view('login');
    }

    public function logar() {
        echo 'Realizar login';
    }

    public function logout() {
        return view('login');
    }
}
