<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FeedbackController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'nomeProduto' => 'required|string',
            'avaliacao' => 'required|integer',
            'comentario' => 'required|string',
        ]);
        return Inertia::render('Feedback', ['message' => 'Feedback enviado com sucesso!']);
    }


}
