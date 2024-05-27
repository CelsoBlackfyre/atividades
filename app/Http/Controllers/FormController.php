<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function ExibirFormulario()
    {
        return Inertia::render('FormCadastro');
    }

    public function Cadastrar(Request $request)
    {
        $dados = $request->validate([
            'nome' => 'required|string',
            'sobrenome' => 'required|string',
            'email' => 'required|email|string',
            'nomeUsuario' => 'required|string',
            'senha' => 'required|string',
            'idade' => 'required|integer|min:18',
        ]);

        Usuario::create($dados);

        return Inertia::render('ResultadoForm', ['dados' => $dados]);

    }


    public function Logar(Request $request)
    {
        $dados = $request->validate([
            'nomeUsuario' => 'required|string',
            'senha' => 'required|string',
        ]);

        return Inertia::render('PaginaPrincipal', ['dados' => $dados]);
    }

    public function authenticated(Request $request, $user)
    {
        $message = 'Usuario invalido'; // Customize the message

        return Inertia::render('Login', compact('Usuario invalido'));
    }





    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}