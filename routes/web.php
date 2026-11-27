<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SantacruzTicketsController;

Route::get('/', function () {
    return view('welcome');

    
});


Route::get('/algo', [SantacruzTicketsController::class, 'Algo'])
    ->name('algo');
   
Route::get('/santacruz/tickets', [SantacruzTicketsController::class, 'SantacruzListarTickets'])
    ->name('santacruz.tickets.listar');

Route::get('/santacruz/tickets/{id}/asiento', [SantacruzTicketsController::class, 'SantacruzFormAsiento'])
    ->name('santacruz.tickets.form');

Route::put('/santacruz/tickets/{id}/asiento', [SantacruzTicketsController::class, 'SantacruzGuardarAsiento'])
    ->name('santacruz.tickets.guardar');