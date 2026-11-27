<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RomeroTicketsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/romero/tickets/crear', [RomeroTicketsController::class, 'RomeroCrearTicket'])
    ->name('romero.tickets.crear');

Route::post('/romero/tickets/guardar', [RomeroTicketsController::class, 'RomeroGuardarTicket'])
    ->name('romero.tickets.guardar');

Route::get('/romero/tickets/{id}', [RomeroTicketsController::class, 'RomeroVerTicket'])
    ->name('romero.tickets.ver');
    