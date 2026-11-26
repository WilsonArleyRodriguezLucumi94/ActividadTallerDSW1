<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MarulandaVehiculo;

class MarulandaVehiculosController extends Controller
{
    //
    public function MarulandaConsultarVehiculos()
    {
        $vehiculos = MarulandaVehiculo::where('estado', 'disponible')
        ->orderBy('placa')    
        ->get();

        return view('MarulandaVehiculo.index', compact('vehiculos'));
    }
    
}
