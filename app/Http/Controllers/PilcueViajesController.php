<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PilcueViaje;

class PilcueViajesController extends Controller
{
    
    public function PilcueMostrarFormularioConsulta()
    {
        return view('pilcue_viaje.index');
    }

    
    public function PilcueConsultarViajesDisponibles(Request $request)
    {
        
        $request->validate([
            'destino' => 'required|string|max:255',
            'fecha' => 'required|date',
        ]);

        $destino = $request->input('destino');
        $fecha = $request->input('fecha');
    
        
        $viajes = PilcueViaje::where('fecha', $fecha)
            ->whereHas('ruta', function ($query) use ($destino) {
                $query->where('ciudad_destino', 'LIKE', '%' . $destino . '%');
            })
            ->with('ruta', 'vehiculo') 
            ->get();

        return view('pilcue_viaje.resultados', [
            'viajes' => $viajes,
            'destino' => $destino,
            'fecha' => $fecha
        ]);
    }
}