<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participante;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function mostrarParticipanetes()
    {
        //
        $participantes = Participante::all();

        return view("eventos", compact("participante"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function registrar(Request $request)
    {
        //
        $request->validate([
            'nome' => 'required|string',
            'email' => 'required|email',
            'evento' => 'required|string',
        ]);

        Participante::create($request->all());

        return redirect()->route('eventos')->with('mensagem', 'Participante registrado com sucesso!');
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
