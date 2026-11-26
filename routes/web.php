<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PilcueViajesController;

// Rutas desarrolladas por Esteban Pilcue (RF09)
Route::get('/pilcue/viajes/consultar', [PilcueViajesController::class, 'PilcueMostrarFormularioConsulta'])
    ->name('pilcue.viajes.consultar.formulario');

Route::get('/pilcue/viajes/resultados', [PilcueViajesController::class, 'PilcueConsultarViajesDisponibles'])
    ->name('pilcue.viajes.consultar.resultados');