<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FeedbackController extends Controller
{
    //
    public function mostrar(Request $request)
    {
        return view('feedback.form');
    }


    public function enviar(Request $request)
    {
        $feedback = $request->validate([
            'nome' => 'required|string',
            'avaliacao' => 'required|integer',
            'comentario' => 'required|string',
        ]);

        return view('feedback.mostrar', compact('feedback'));
    }
}
