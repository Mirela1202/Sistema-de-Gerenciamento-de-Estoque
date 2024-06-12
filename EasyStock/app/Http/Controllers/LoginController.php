<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function MostrarFormularioLogin(){
        return view("login");
    }

    public function login(Request $request){
        $credenciais = $request->only('usu_login','usu_senha');

        if (Auth::attempt($credenciais)){
            return redirect()->intended('/cadastro');
        }
        return back()->withErrors(['email'=> 'Credenciais invalidas']);
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
