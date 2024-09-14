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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id(); // Esto define la columna 'id' como clave primaria con AUTO_INCREMENT
            $table->foreignId('id_transaccion')->constrained('transacciones')->onDelete('cascade');
            $table->timestamp('fecha_emision')->useCurrent();
            $table->string('codigo_qr', 255);
            $table->string('estado_ticket', 50);
            $table->timestamps();
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
