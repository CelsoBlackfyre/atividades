<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CalculadoraController extends Controller
{
    //
    public function mostrarCalculadora()
    {
        return Inertia::render("Calculadora");
    }
    public function calcular(Request $request)
    {
        $request->validate([
            'numero1' => 'required|numeric',
            'numero2' => 'required|numeric',
            'operador' => 'required|string',
        ]);

        $numero1 = $request->input('number1');
        $numero2 = $request->input('number2');
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

        return Inertia::render("Calculadora", [
            'resultado' => $resultado,
            'numero1' => $numero1,
            'numero2' => $numero2,
            'operador' => $operador,
        ]);
    }
}
