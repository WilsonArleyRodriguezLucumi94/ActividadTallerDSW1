<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
    $table->id();

    $table->foreignId('pasajero_id')
        ->constrained('pasajeros')
        ->restrictOnDelete();

    $table->foreignId('viaje_id')
        ->constrained('viajes')
        ->restrictOnDelete();

    $table->unsignedInteger('numero_asiento');
    $table->string('estado')->default('pendiente');

    $table->timestamps();

    $table->unique(['viaje_id', 'numero_asiento']);
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
