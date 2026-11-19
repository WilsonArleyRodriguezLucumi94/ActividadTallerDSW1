<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Viaje extends Model
{
    use HasFactory;

    protected $fillable = [
        'ruta_id',
        'vehiculo_id',
        'fecha',
        'hora',
        'precio'
    ];

    protected $casts = [
        'fecha' => 'date',
        'precio' => 'decimal:2'
    ];

    public function ruta()
    {
        return $this->belongsTo(Ruta::class);
    }

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}