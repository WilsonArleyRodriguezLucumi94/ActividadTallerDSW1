<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SantacruzTicket extends Model
{
    use HasFactory;

    protected $table = 'tickets';

    protected $fillable = [
        'pasajero_id',
        'viaje_id',
        'asiento',
        'estado',
    ];
}