<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IMCController;
use App\Http\Controllers\SonoController;
use App\Http\Controllers\ViagemController;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/imc', function () {
    return view('imc_form');
})->name('imc.form');
Route::post('/imc/calcular', [IMCController::class, 'calcular'])->name('imc.calcular');
Route::get('/imc/resultado', [IMCController::class, 'resultado'])->name('imc.resultado');


Route::get('/sono', function () {
    return view('sono_form');
})->name('sono.form');

Route::post('/sono/avaliar', [SonoController::class, 'avaliar'])->name('sono.avaliar');
Route::get('/sono/resultado', [SonoController::class, 'resultado'])->name('sono.resultado');



Route::get('/viagem', function () {
    return view('viagem_form');
})->name('viagem.form');
Route::post('/viagem/calcular', [ViagemController::class, 'calcular'])->name('viagem.calcular');
Route::get('/viagem/resultado', [ViagemController::class, 'resultado'])->name('viagem.resultado');
