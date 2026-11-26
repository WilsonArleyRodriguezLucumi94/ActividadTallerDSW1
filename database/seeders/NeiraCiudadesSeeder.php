<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NeiraCiudadesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('destinos')->where('ciudad', 'Bogota')->update(['ciudad' => 'Bogotá']);
        DB::table('destinos')->where('ciudad', 'Medellin')->update(['ciudad' => 'Medellín']);
        DB::table('destinos')->where('ciudad', 'Popayan')->update(['ciudad' => 'Popayán']);

        $ciudades = [
            ['ciudad' => 'Barranquilla', 'descripcion' => 'Puerta de oro de Colombia'],
            ['ciudad' => 'Bogotá',       'descripcion' => 'Capital de la República'],
            ['ciudad' => 'Bucaramanga',  'descripcion' => 'Ciudad bonita de Santander'],
            ['ciudad' => 'Buenaventura', 'descripcion' => 'Puerto principal sobre el Pacífico'],
            ['ciudad' => 'Cali',         'descripcion' => 'Capital del Valle del Cauca'],
            ['ciudad' => 'Cartagena',    'descripcion' => 'Ciudad amurallada'],
            ['ciudad' => 'Manizales',    'descripcion' => 'Capital de Caldas'],
            ['ciudad' => 'Medellín',     'descripcion' => 'Ciudad de la eterna primavera'],
            ['ciudad' => 'Pereira',      'descripcion' => 'Perla del Otún'],
            ['ciudad' => 'Popayán',      'descripcion' => 'Ciudad blanca de Colombia'],
        ];

        DB::table('destinos')->insertOrIgnore($ciudades);
    }
}