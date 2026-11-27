<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SantacruzTicket;

class SantacruzTicketsController extends Controller
{
    // Listar todos los tickets para asignarles asiento
    public function SantacruzListarTickets()
    {
        $tickets = SantacruzTicket::all();
        return view('SantacruzTicket.index', compact('tickets'));
    }

    // Mostrar el formulario para asignar asiento a un ticket
    public function SantacruzFormAsiento($id)
    {
        $ticket = SantacruzTicket::findOrFail($id);
        return view('SantacruzTicket.asignar', compact('ticket'));
    }

    // Guardar el número de asiento validando que no se repita en ningún ticket
    public function SantacruzGuardarAsiento(Request $request, $id)
    {
        $request->validate([
            'asiento' => 'required|integer|min:1',
        ]);

        $ticket = SantacruzTicket::findOrFail($id);

        $asientoOcupado = SantacruzTicket::where('numero_asiento', $request->asiento)
            ->where('id', '!=', $ticket->id)
            ->exists();

        if ($asientoOcupado) {
            return back()->withErrors(['asiento' => 'Ese número de asiento ya está asignado a otro ticket.']);
        }

        $ticket->numero_asiento = $request->asiento;
        $ticket->save();

        return redirect()->route('santacruz.tickets.listar')
                         ->with('success', 'Asiento asignado correctamente al ticket #' . $ticket->id);
    }
}