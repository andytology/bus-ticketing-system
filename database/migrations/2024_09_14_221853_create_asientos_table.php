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
        Schema::create('asientos', function (Blueprint $table) {
            $table->id(); // Esto define la columna 'id' como clave primaria con AUTO_INCREMENT
            $table->integer('numero_asiento');
            $table->string('estado', 50);
            $table->foreignId('id_bus')->constrained('buses')->onDelete('cascade');
            $table->timestamps();
        });
    }
    


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asientos');
    }
};
