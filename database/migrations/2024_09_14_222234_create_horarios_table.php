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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id(); // Esto define la columna 'id' como clave primaria con AUTO_INCREMENT
            $table->foreignId('id_ruta')->constrained('rutas')->onDelete('cascade');
            $table->time('hora_salida');
            $table->date('fecha_salida')->nullable();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horarios');
    }
};
