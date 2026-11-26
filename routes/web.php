<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\BolanosPasajerosController;

// Rutas desarrolladas por Bolaños (RF01)
Route::get('/bolanos/pasajeros/crear', [BolanosPasajerosController::class, 'BolanosCrearPasajero'])->name('bolanos.pasajeros.crear');
Route::post('/bolanos/pasajeros/guardar', [BolanosPasajerosController::class, 'BolanosGuardarPasajero'])->name('bolanos.pasajeros.guardar');