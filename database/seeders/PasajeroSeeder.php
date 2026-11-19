<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pasajero;

class PasajeroSeeder extends Seeder
{
    public function run(): void
    {
        $pasajeros = [
            [
                'nombre' => 'Carlos Andres Perez',
                'identificacion' => '1001234567',
                'telefono' => '3001234567',
                'correo' => 'carlos@gmail.com'
            ],
            [
                'nombre' => 'Maria Fernanda Lopez',
                'identificacion' => '1002345678',
                'telefono' => '3012345678',
                'correo' => 'maria@gmail.com'
            ],
            [
                'nombre' => 'Juan David Rodriguez',
                'identificacion' => '1003456789',
                'telefono' => '3023456789',
                'correo' => 'juan@gmail.com'
            ],
            [
                'nombre' => 'Laura Camila Torres',
                'identificacion' => '1004567890',
                'telefono' => '3034567890',
                'correo' => 'laura@gmail.com'
            ],
            [
                'nombre' => 'Andres Felipe Martinez',
                'identificacion' => '1005678901',
                'telefono' => '3045678901',
                'correo' => 'andres@gmail.com'
            ],
        ];

        foreach ($pasajeros as $pasajero) {
            Pasajero::updateOrCreate(
                ['identificacion' => $pasajero['identificacion']],
                $pasajero
            );
        }
    }
}