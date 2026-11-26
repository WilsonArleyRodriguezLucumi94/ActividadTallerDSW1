<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarulandaVehiculosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/karina/vehiculos', [MarulandaVehiculosController::class, 'MarulandaConsultarVehiculos'])
    ->name('karina.vehiculos.consultar');

    Route::get('/karina/vehiculos', [MarulandaVehiculosController::class, 'MarulandaConsultarVehiculos'])
    ->name('karina.vehiculos.consultar');