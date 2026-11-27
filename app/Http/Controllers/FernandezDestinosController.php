<?php

namespace App\Http\Controllers;

use App\Models\Destino;
use Illuminate\Http\Request;

class FernandezDestinosController extends Controller
{
    // Consultar todos los destinos registrados
    public function FernandezConsultarDestinos()
    {
        $destinos = Destino::all();
        return view('FernandezDestino.index', compact('destinos'));
    }

    // Mostrar formulario para modificar un destino
    public function FernandezEditarDestino($id)
    {
        $destino = Destino::findOrFail($id);
        return view('FernandezDestino.edit', compact('destino'));
    }

    // Guardar la modificación del destino
    public function FernandezActualizarDestino(Request $request, $id)
    {
        $request->validate([
            'ciudad'      => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        $destino = Destino::findOrFail($id);
        $destino->update([
            'ciudad'      => $request->ciudad,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('fernandez.destinos.consultar')
            ->with('success', 'Destino actualizado correctamente.');
    }

    // Eliminar un destino registrado
    public function FernandezEliminarDestino($id)
    {
        try {
            $destino = Destino::findOrFail($id);
            $destino->delete();

            return redirect()->route('fernandez.destinos.consultar')
                ->with('success', 'Destino eliminado correctamente.');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('fernandez.destinos.consultar')
                ->with('error', 'No se puede eliminar este destino porque tiene rutas asociadas.');
        }
    }
}