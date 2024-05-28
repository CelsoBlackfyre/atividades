<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class QuizController extends Controller
{


    public function mostrarQuiz()
    {
        return view("quiz.form");
    }

    public function respostasFormulario(Request $request)
    {
        $validated = $request->validate([
            'pergunta1' => 'required',
            'pergunta2' => 'required',
        ]);

        $respostas = [
            'pergunta1' => 'Londres',
            'pergunta2' => '4',
        ];

        $acertos = 0;
        foreach ($respostas as $pergunta => $resposta) {
            if ($request->input($pergunta) == $resposta) {
                $acertos++;
            }
        }

        return view("quiz.resultado", ['acertos' => $acertos]);
    }

    /**
     * Display a listing of the resource.
     */
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
