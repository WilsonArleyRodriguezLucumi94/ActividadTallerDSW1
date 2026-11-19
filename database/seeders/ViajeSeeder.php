<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Viaje;

class ViajeSeeder extends Seeder
{
    public function run(): void
    {
        $viajes = [
            [
                'ruta_id' => 1,
                'vehiculo_id' => 1,
                'fecha' => '2026-12-01',
                'hora' => '08:00:00',
                'precio' => 35000
            ],
            [
                'ruta_id' => 1,
                'vehiculo_id' => 2,
                'fecha' => '2026-12-01',
                'hora' => '14:00:00',
                'precio' => 35000
            ],
            [
                'ruta_id' => 2,
                'vehiculo_id' => 3,
                'fecha' => '2026-12-02',
                'hora' => '09:00:00',
                'precio' => 15000
            ],
            [
                'ruta_id' => 3,
                'vehiculo_id' => 5,
                'fecha' => '2026-12-02',
                'hora' => '10:00:00',
                'precio' => 35000
            ],
            [
                'ruta_id' => 4,
                'vehiculo_id' => 1,
                'fecha' => '2026-12-03',
                'hora' => '07:00:00',
                'precio' => 95000
            ],
        ];

        foreach ($viajes as $viaje) {
            Viaje::updateOrCreate(
                [
                    'ruta_id' => $viaje['ruta_id'],
                    'vehiculo_id' => $viaje['vehiculo_id'],
                    'fecha' => $viaje['fecha'],
                    'hora' => $viaje['hora']
                ],
                $viaje
            );
        }
    }
}