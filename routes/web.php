<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NeiraRutasController;

Route::get('/neira/rutas', [NeiraRutasController::class, 'NeiraListarRutas'])
    ->name('neira.rutas.listar');

Route::get('/neira/rutas/crear', [NeiraRutasController::class, 'NeiraCrearRuta'])
    ->name('neira.rutas.crear');

Route::post('/neira/rutas/guardar', [NeiraRutasController::class, 'NeiraGuardarRuta'])
    ->name('neira.rutas.guardar');
