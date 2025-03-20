<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IMCController;

// Página do formulário
Route::get('/', function () {
    return view('imc_form');
});

// Processa os dados (POST)
Route::post('/calcular', [IMCController::class, 'calcular']);

// Exibe o resultado
Route::get('/resultado', [IMCController::class, 'resultado']);




