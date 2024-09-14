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
        Schema::create('rutas', function (Blueprint $table) {
            $table->id(); // Esto define la clave primaria 'id' automáticamente
            $table->string('origen', 100);
            $table->string('destino', 100);
            $table->decimal('precio', 10, 2);
            $table->decimal('distancia', 10, 2);
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rutas');
    }
};
