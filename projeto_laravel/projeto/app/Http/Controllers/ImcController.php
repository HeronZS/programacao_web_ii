<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IMCController extends Controller {

    public function calcular(Request $request) {
        $request->validate([
            'peso' => 'required|numeric|min:1',
            'altura' => 'required|numeric|min:0.5'
        ]);

        $peso = $request->input('peso');
        $altura = $request->input('altura');
        $imc = $peso / ($altura * $altura);

        if ($imc < 18.5) {
            $classificacao = 'Abaixo do Peso';
        } elseif ($imc < 24.9) {
            $classificacao = 'Peso Normal';
        } elseif ($imc < 29.9) {
            $classificacao = 'Sobrepeso';
        } elseif ($imc < 34.9) {
            $classificacao = 'Obesidade Grau I';
        } elseif ($imc < 39.9) {
            $classificacao = 'Obesidade Grau II';
        } else {
            $classificacao = 'Obesidade Grau III (Mórbida)';
        }

        return redirect()->route('imc.resultado')->with([
            'peso' => $peso,
            'altura' => $altura,
            'imc' => number_format($imc, 2),
            'classificacao' => $classificacao
        ]);
    }

    public function resultado() {
        return view('imc_result', [
            'peso' => session('peso'),
            'altura' => session('altura'),
            'imc' => session('imc'),
            'classificacao' => session('classificacao')
        ]);
    }
}
