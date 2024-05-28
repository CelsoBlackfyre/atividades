<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ContatoController extends Controller
{
    //
    public function exibirFormContato(Request $request)
    {
        return Inertia::render("FormContato");
    }

    public function enviar(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'email' => 'required|email',
            'assunto' => 'required|string',
            'mensagem' => 'required|string',
        ]);

        return redirect()->back()->with('mensagem', 'Mensagem enviada com sucesso!');
        ;
    }
}
