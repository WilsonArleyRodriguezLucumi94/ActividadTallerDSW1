<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ticket;

class TicketSeeder extends Seeder
{
    public function run(): void
    {
        $tickets = [
            [
                'pasajero_id' => 1,
                'viaje_id' => 1,
                'numero_asiento' => 1,
                'estado' => 'pagado'
            ],
            [
                'pasajero_id' => 2,
                'viaje_id' => 1,
                'numero_asiento' => 2,
                'estado' => 'pendiente'
            ],
            [
                'pasajero_id' => 3,
                'viaje_id' => 1,
                'numero_asiento' => 3,
                'estado' => 'pagado'
            ],
            [
                'pasajero_id' => 4,
                'viaje_id' => 2,
                'numero_asiento' => 1,
                'estado' => 'cancelado'
            ],
            [
                'pasajero_id' => 5,
                'viaje_id' => 2,
                'numero_asiento' => 2,
                'estado' => 'pagado'
            ],
            [
                'pasajero_id' => 1,
                'viaje_id' => 3,
                'numero_asiento' => 1,
                'estado' => 'pagado'
            ],
            [
                'pasajero_id' => 2,
                'viaje_id' => 3,
                'numero_asiento' => 2,
                'estado' => 'pendiente'
            ],
            [
                'pasajero_id' => 3,
                'viaje_id' => 4,
                'numero_asiento' => 1,
                'estado' => 'pagado'
            ],
            [
                'pasajero_id' => 4,
                'viaje_id' => 5,
                'numero_asiento' => 1,
                'estado' => 'pagado'
            ],
            [
                'pasajero_id' => 5,
                'viaje_id' => 5,
                'numero_asiento' => 2,
                'estado' => 'pendiente'
            ],
        ];

        foreach ($tickets as $ticket) {
            Ticket::updateOrCreate(
                [
                    'viaje_id' => $ticket['viaje_id'],
                    'numero_asiento' => $ticket['numero_asiento']
                ],
                $ticket
            );
        }
    }
}