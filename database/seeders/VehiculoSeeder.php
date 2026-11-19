<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehiculo;

class VehiculoSeeder extends Seeder
{
    public function run(): void
    {
        $vehiculos = [
            [
                'placa' => 'ABC123',
                'tipo' => 'Bus',
                'capacidad' => 40,
                'estado' => 'disponible'
            ],
            [
                'placa' => 'DEF456',
                'tipo' => 'Buseta',
                'capacidad' => 25,
                'estado' => 'disponible'
            ],
            [
                'placa' => 'GHI789',
                'tipo' => 'Microbus',
                'capacidad' => 19,
                'estado' => 'disponible'
            ],
            [
                'placa' => 'JKL012',
                'tipo' => 'Bus',
                'capacidad' => 42,
                'estado' => 'mantenimiento'
            ],
            [
                'placa' => 'MNO345',
                'tipo' => 'Buseta',
                'capacidad' => 28,
                'estado' => 'disponible'
            ],
        ];

        foreach ($vehiculos as $vehiculo) {
            Vehiculo::updateOrCreate(
                ['placa' => $vehiculo['placa']],
                $vehiculo
            );
        }
    }
}