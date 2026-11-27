<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class HenaoVehiculosController extends Controller
{
    public function index()
    {
        $vehiculos = Vehiculo::all();
        return view('HenaoVehiculo.index', compact('vehiculos'));
    }

    public function create()
    {
        return view('HenaoVehiculo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'placa' => 'required|unique:vehiculos,placa|max:10',
            'tipo' => 'required',
            'capacidad' => 'required|integer|min:1',
            'estado' => 'required',
        ]);

        Vehiculo::create([
            'placa' => strtoupper($request->placa),
            'tipo' => $request->tipo,
            'capacidad' => $request->capacidad,
            'estado' => $request->estado,
        ]);

        return redirect()->route('henao.vehiculos.index')
                         ->with('mensaje', 'Vehículo registrado correctamente');
    }
}
