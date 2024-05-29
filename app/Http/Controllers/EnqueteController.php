<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnqueteController extends Controller
{

    public function exibirEnquete()
    {
        return view("enquete.form");
    }


    public function mostrarEnquete()
    {
        $resultados = session("resultados", [
            'Star Wars' => 0,
            'Harry Potter' => 0,
            'Senhor dos Aneis' => 0,
            'Duna' => 0,
            'Mad Max' => 0,
        ]);
        return view("enquete", compact("resultados"));
    }

    public function enviar(Request $request)
    {
        $filme = $request->input("filme");
        $resultados = session("resultados", [
            'Star Wars' => 0,
            'Harry Potter' => 0,
            'Senhor dos Aneis' => 0,
            'Duna' => 0,
            'Mad Max' => 0,
        ]);
        $resultados[$filme] = $resultados[$filme] + 1;
        session(["resultados" => $resultados]);
        return redirect()->route("enquete.mostrar");
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
