<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('asignacion_buses', function (Blueprint $table) {
            $table->id('id_asignacion');
            $table->foreignId('id_bus')->constrained('buses')->onDelete('cascade');
            $table->foreignId('id_conductor')->constrained('conductores')->onDelete('cascade'); // Asegúrate de que la tabla 'conductores' tiene el campo 'id'
            $table->date('fecha_asignacion');
            $table->timestamps();
        });
    }
    


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignacion_buses');
    }
};
