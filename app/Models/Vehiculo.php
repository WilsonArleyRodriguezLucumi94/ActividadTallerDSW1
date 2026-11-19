<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'placa',
        'tipo',
        'capacidad',
        'estado'
    ];

    public function viajes()
    {
        return $this->hasMany(Viaje::class);
    }
}