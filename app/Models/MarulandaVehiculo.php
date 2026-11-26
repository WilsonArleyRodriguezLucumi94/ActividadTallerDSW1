<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarulandaVehiculo extends Model
{
    //
    protected $table = 'Vehiculos';

    protected $fillable = [
        'placa',
        'tipo',
        'capacidad',
        'estado',
    ];
}
