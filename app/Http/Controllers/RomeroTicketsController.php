<?php

namespace App\Http\Controllers;

use App\Models\Pasajero;
use App\Models\RomeroTicket;
use App\Models\Viaje;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RomeroTicketsController extends Controller
{
    public function RomeroCrearTicket()
    {
        $pasajeros = Pasajero::orderBy('nombre')->get();
        $viajes = Viaje::orderBy('fecha')->orderBy('hora')->get();

        return view('RomeroTicket.crear', compact('pasajeros', 'viajes'));
    }

    public function RomeroGuardarTicket(Request $request)
    {
        $datos = $request->validate([
            'pasajero_id' => ['required', 'integer', 'exists:pasajeros,id'],
            'viaje_id' => ['required', 'integer', 'exists:viajes,id'],
            'numero_asiento' => [
                'required',
                'integer',
                'min:1',
                Rule::unique('tickets', 'numero_asiento')
                    ->where('viaje_id', $request->input('viaje_id')),
            ],
        ], [
            'pasajero_id.required' => 'Selecciona un pasajero.',
            'viaje_id.required' => 'Selecciona un viaje.',
            'numero_asiento.required' => 'Indica el número de asiento.',
            'numero_asiento.unique' => 'Ese asiento ya está vendido para este viaje.',
        ]);

        $ticket = RomeroTicket::create([
            ...$datos,
            'estado' => 'pendiente',
        ]);

        return redirect()
            ->route('romero.tickets.ver', $ticket->id)
            ->with('exito', 'Ticket registrado correctamente.');
    }

    public function RomeroVerTicket($id)
    {
        $ticket = RomeroTicket::with(['pasajero', 'viaje'])->findOrFail($id);

        return view('RomeroTicket.ver', compact('ticket'));
    }
}