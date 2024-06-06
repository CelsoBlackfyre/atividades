<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesquisaController extends Controller
{
    //

    public function mostrar(Request $request)
    {

        return view("pesquisa.form");
    }

    public function resultados(Request $request)
    {
        return view("pesquisa.enviar");
    }
}
