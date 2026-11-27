<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HenaoVehiculosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/henao/vehiculos', [HenaoVehiculosController::class, 'index'])->name('henao.vehiculos.index');
Route::get('/henao/vehiculos/crear', [HenaoVehiculosController::class, 'create'])->name('henao.vehiculos.create');
Route::post('/henao/vehiculos', [HenaoVehiculosController::class, 'store'])->name('henao.vehiculos.store');
