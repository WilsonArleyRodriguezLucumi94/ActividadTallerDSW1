<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Código desarrollado por Bolaños (RF01)
class BolanosPasajero extends Model
{
    protected $table = 'pasajeros';

    protected $fillable = [
        'nombre',
        'identificacion',
        'telefono',
        'correo',
    ];
}
