<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class QuizController extends Controller
{


    public function mostrarQuiz()
    {
        // return Inertia::render("Quiz");
        return view("quiz.form");
    }

    public function respostasFormulario(Request $request)
    {
        $validated = $request->validate([
            'pergunta1' => 'required',
            'pergunta2' => 'required',
        ]);

        $respostas = [
            'pergunta1' => $request->input('pergunta1'),
            'pergunta2' => $request->input('pergunta2'),
        ];

        $acertos = 0;
        foreach ($respostas as $pergunta => $resposta) {
            if ($resposta == "a") {
                $acertos++;
            }
        }

        return view("quiz.resultado", compact('$acertos'), ['respostas' => $respostas]);
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
