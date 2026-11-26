<?php

namespace App\Http\Controllers;

use App\Models\BolanosPasajero;
use Illuminate\Http\Request;

class BolanosPasajerosController extends Controller
{
    // Código desarrollado por Bolaños (RF01)
    public function BolanosCrearPasajero()
    {
        return view('BolanosPasajero.create');
    }

    public function BolanosGuardarPasajero(Request $request)
    {
        $datos = $request->validate([
            'nombre'         => 'required|string|max:255',
            'identificacion' => 'required|string|max:20|unique:pasajeros,identificacion',
            'telefono'       => 'required|string|max:20',
            'correo'         => 'required|email|max:255|unique:pasajeros,correo',
        ]);

        BolanosPasajero::create($datos);

        return redirect()
            ->route('bolanos.pasajeros.crear')
            ->with('exito', 'Pasajero registrado correctamente.');
    }
}
