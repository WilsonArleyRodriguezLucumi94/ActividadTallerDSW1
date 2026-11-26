<?php

namespace App\Http\Controllers;

use App\Models\NeiraRuta;
use App\Models\NeiraDestino;
use Illuminate\Http\Request;

class NeiraRutasController extends Controller
{

    public function NeiraListarRutas()
    {
        $rutas = NeiraRuta::with(['origen', 'destino'])->orderBy('distancia', 'desc')->get();
        return view('NeiraRuta.index', compact('rutas'));
    }

    public function NeiraCrearRuta()
    {
        $destinos = NeiraDestino::orderBy('ciudad')->get()->unique('ciudad')->values();
        return view('NeiraRuta.crear', compact('destinos'));
    }

    public function NeiraGuardarRuta(Request $request)
    {
        $datos = $request->validate([
            'origen_id'  => 'required|exists:destinos,id',
            'destino_id' => 'required|exists:destinos,id|different:origen_id',
            'distancia'  => 'required|numeric|min:0.1|max:999999.99',
        ], [
            'destino_id.different' => 'La ciudad de destino no puede ser igual a la de origen.',
            'distancia.numeric'    => 'La distancia debe ser un número válido.',
        ]);

        NeiraRuta::create($datos);

        return redirect()->route('neira.rutas.listar')
                         ->with('exito', 'Ruta registrada correctamente.');
    }
}