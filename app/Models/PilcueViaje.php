<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PilcueViaje extends Model
{
    use HasFactory;

    protected $table = 'viajes';

    protected $fillable = [
        'ruta_id',
        'vehiculo_id',
        'fecha',
        'hora',
        'precio',
    ];

    public function ruta()
    {
        return $this->belongsTo(Ruta::class, 'ruta_id');
    }

    // Relación con el modelo Vehiculo
    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class, 'vehiculo_id');
    }
}