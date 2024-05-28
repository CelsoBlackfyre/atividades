<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FeedbackController extends Controller
{
    //
    public function mostrar(Request $request)
    {
        return Inertia::render('Feedback');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'avaliacao' => 'required|integer',
            'comentario' => 'required|string',
        ]);
        return Inertia::render('Feedback', ['message' => 'Feedback enviado com sucesso!']);
    }


}
