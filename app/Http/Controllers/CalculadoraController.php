<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CalculadoraController extends Controller
{
    public function mostrarCalculadora()
    {
        return view("calculadora.form");
    }

    public function calcular(Request $request)
    {
        $request->validate([
            'numero1' => 'required|numeric',
            'numero2' => 'required|numeric',
            'operador' => 'required|string',
        ]);

        $numero1 = $request->input('numero1');
        $numero2 = $request->input('numero2');
        $operador = $request->input('operador');
        $resultado = null;

        switch ($operador) {
            case '+':
                $resultado = $numero1 + $numero2;
                break;
            case '-':
                $resultado = $numero1 - $numero2;
                break;
            case '*':
                $resultado = $numero1 * $numero2;
                break;
            case '/':
                $resultado = $numero1 / $numero2;
                break;
            default:
                $resultado = "Operador inválido";
        }

        return view("calculadora.form", compact("resultado"));
    }
}
