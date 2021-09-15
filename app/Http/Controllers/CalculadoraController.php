<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function sumar($numero1, $numero2){
        $resultado = $numero1 + $numero2;
        return view('sumar',compact('resultado'));

    }

    public function restar($numero1, $numero2){
        $resultado = $numero1 - $numero2;
        return view('restar',compact('resultado'));

    }

    public function dividir($numero1, $numero2){
        $resultado = $numero1 / $numero2;
        return view('dividir',compact('resultado'));

    }

    public function multiplicar($numero1, $numero2){
        $resultado = $numero1 * $numero2;
        return view('multiplicar',compact('resultado'));

    }
}
