<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NeiraRuta extends Model
{
    use HasFactory;

    protected $table = 'rutas';

    protected $fillable = ['origen_id', 'destino_id', 'distancia'];

    public function origen()
    {
        return $this->belongsTo(NeiraDestino::class, 'origen_id');
    }

    public function destino()
    {
        return $this->belongsTo(NeiraDestino::class, 'destino_id');
    }
}