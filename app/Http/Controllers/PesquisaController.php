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
        $pesquisa = $request->pesquisa;
        return view("pesquisa.resultados", compact("pesquisa"));
    }
}
