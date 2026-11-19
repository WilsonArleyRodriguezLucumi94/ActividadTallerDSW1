<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ruta extends Model
{
    use HasFactory;

    protected $fillable = [
        'origen_id',
        'destino_id',
        'distancia'
    ];

    public function origen()
    {
        return $this->belongsTo(Destino::class, 'origen_id');
    }

    public function destino()
    {
        return $this->belongsTo(Destino::class, 'destino_id');
    }

    public function viajes()
    {
        return $this->hasMany(Viaje::class);
    }
}