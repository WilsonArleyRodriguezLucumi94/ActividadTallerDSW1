<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'pasajero_id',
        'viaje_id',
        'numero_asiento',
        'estado'
    ];

    public function pasajero()
    {
        return $this->belongsTo(Pasajero::class);
    }

    public function viaje()
    {
        return $this->belongsTo(Viaje::class);
    }
}