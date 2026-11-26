<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RomeroTicket extends Model
{
    // La migración crea la tabla "tickets", no "romero_tickets".
    protected $table = 'tickets';

    protected $fillable = [
        'pasajero_id',
        'viaje_id',
        'numero_asiento',
        'estado',
    ];

    public function pasajero()
    {
        return $this->belongsTo(Pasajero::class, 'pasajero_id');
    }

    public function viaje()
    {
        return $this->belongsTo(Viaje::class, 'viaje_id');
    }
}