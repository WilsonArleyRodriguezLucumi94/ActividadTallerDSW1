<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FernandezDestinosController;

Route::get('/', function () {
    return view('welcome');
});


// Rutas desarrolladas por Edinson Fernandez (RF04)
Route::get('/fernandez/destinos', [FernandezDestinosController::class, 'FernandezConsultarDestinos'])
    ->name('fernandez.destinos.consultar');

Route::get('/fernandez/destinos/{id}/editar', [FernandezDestinosController::class, 'FernandezEditarDestino'])
    ->name('fernandez.destinos.editar');

Route::put('/fernandez/destinos/{id}', [FernandezDestinosController::class, 'FernandezActualizarDestino'])
    ->name('fernandez.destinos.actualizar');

Route::delete('/fernandez/destinos/{id}', [FernandezDestinosController::class, 'FernandezEliminarDestino'])
    ->name('fernandez.destinos.eliminar');
