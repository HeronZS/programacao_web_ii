<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SonoController extends Controller {
    public function avaliar(Request $request) {
        $request->validate([
            'horas_sono' => 'required|numeric|min:0'
        ]);

        $horasSono = $request->input('horas_sono');  
        $classificacao = '';
        $classeSono = '';

        if ($horasSono < 6) {
            $classificacao = 'Privação de Sono';
            $classeSono = 'privacao';
        } elseif ($horasSono >= 6 && $horasSono < 7) {
            $classificacao = 'Sono Insuficiente';
            $classeSono = 'insuficiente';
        } elseif ($horasSono >= 7 && $horasSono <= 9) {
            $classificacao = 'Sono Adequado';
            $classeSono = 'adequado';
        } else {
            $classificacao = 'Sono Excessivo';
            $classeSono = 'excessivo';
        }

        
        return redirect()->route('sono.resultado')->with([
            'horas_dormidas' => $horasSono,
            'classificacao' => $classificacao,
            'classeSono' => $classeSono
        ]);
    }

    public function resultado() {
        return view('sono_result', [
            'horas_dormidas' => session('horas_dormidas'),
            'classificacao' => session('classificacao'),
            'classeSono' => session('classeSono')
        ]);
    }
}


