<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            PasajeroSeeder::class,
            DestinoSeeder::class,
            VehiculoSeeder::class,
            RutaSeeder::class,
            ViajeSeeder::class,
            TicketSeeder::class,
        ]);
    }
}