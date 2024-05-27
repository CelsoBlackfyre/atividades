<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'nomeUsuario' => 'required|string',
            'senha' => 'required|string',
        ]);

        $dados = $request->only('nomeUsuario', 'senha');

        if (Auth::attempt($dados)) {
            return Inertia::render('FormLogin', ['message' => 'Login feito com sucesso!']);
        } else {

            return Inertia::render('FormLogin', ['message' => 'Login Invalido.']);
        }
    }
}
