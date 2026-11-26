<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Código desarrollado por Bolaños (RF01)
return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('pasajeros')) {
            return; // evita conflictos si otro compañero ya la creó
        }

        Schema::create('pasajeros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('identificacion')->unique();
            $table->string('telefono', 20);
            $table->string('correo')->unique();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pasajeros');
    }
};
