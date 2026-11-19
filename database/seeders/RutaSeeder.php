<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ruta;

class RutaSeeder extends Seeder
{
    public function run(): void
    {
        $rutas = [
            [
                'origen_id' => 1,
                'destino_id' => 2,
                'distancia' => 140.00
            ],
            [
                'origen_id' => 1,
                'destino_id' => 3,
                'distancia' => 45.00
            ],
            [
                'origen_id' => 2,
                'destino_id' => 1,
                'distancia' => 140.00
            ],
            [
                'origen_id' => 3,
                'destino_id' => 4,
                'distancia' => 550.00
            ],
            [
                'origen_id' => 4,
                'destino_id' => 5,
                'distancia' => 415.00
            ],
        ];

        foreach ($rutas as $ruta) {
            Ruta::updateOrCreate(
                [
                    'origen_id' => $ruta['origen_id'],
                    'destino_id' => $ruta['destino_id']
                ],
                $ruta
            );
        }
    }
}