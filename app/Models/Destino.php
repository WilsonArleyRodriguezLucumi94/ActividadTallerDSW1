<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Destino extends Model
{
    use HasFactory;

    protected $fillable = [
        'ciudad',
        'descripcion'
    ];

    public function rutasOrigen()
    {
        return $this->hasMany(Ruta::class, 'origen_id');
    }

    public function rutasDestino()
    {
        return $this->hasMany(Ruta::class, 'destino_id');
    }
}