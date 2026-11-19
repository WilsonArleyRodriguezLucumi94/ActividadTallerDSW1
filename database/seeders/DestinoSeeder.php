<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Destino;

class DestinoSeeder extends Seeder
{
    public function run(): void
    {
        $destinos = [
            [
                'ciudad' => 'Cali',
                'descripcion' => 'Capital del Valle del Cauca'
            ],
            [
                'ciudad' => 'Popayan',
                'descripcion' => 'Capital del departamento del Cauca'
            ],
            [
                'ciudad' => 'Santander de Quilichao',
                'descripcion' => 'Municipio del norte del Cauca'
            ],
            [
                'ciudad' => 'Bogota',
                'descripcion' => 'Capital de Colombia'
            ],
            [
                'ciudad' => 'Medellin',
                'descripcion' => 'Capital de Antioquia'
            ],
        ];

        foreach ($destinos as $destino) {
            Destino::updateOrCreate(
                ['ciudad' => $destino['ciudad']],
                $destino
            );
        }
    }
}