<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViagemController extends Controller {
    public function calcular(Request $request) {
        $request->validate([
            'distancia' => 'required|numeric|min:1',
            'consumo' => 'required|numeric|min:1',
            'preco' => 'required|numeric|min:0'
        ]);

        $distancia = $request->input('distancia');
        $consumo = $request->input('consumo');
        $preco = $request->input('preco');

        $gastoTotal = ($distancia / $consumo) * $preco;

        return redirect()->route('viagem.resultado')->with([
            'distancia' => $distancia,
            'consumo' => $consumo,
            'preco' => $preco,
            'gastoTotal' => number_format($gastoTotal, 2)
        ]);
    }

    public function resultado() {
        return view('viagem_result', [
            'distancia' => session('distancia'),
            'consumo' => session('consumo'),
            'preco' => session('preco'),
            'gastoTotal' => session('gastoTotal')
        ]);
    }
}

