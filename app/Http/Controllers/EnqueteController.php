<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnqueteController extends Controller
{


    public function mostrarEnquete()
    {
        return view("enquete.form");
    }

    public function calcularEnquete(Request $request)
    {
        $opcao1 = 0;
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
