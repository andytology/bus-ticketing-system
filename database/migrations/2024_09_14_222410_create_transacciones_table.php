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
    Schema::create('transacciones', function (Blueprint $table) {
        $table->id(); // Esto define la columna 'id' como clave primaria con AUTO_INCREMENT
        $table->foreignId('id_usuario')->constrained('usuarios')->onDelete('cascade');
        $table->foreignId('id_asiento')->constrained('asientos')->onDelete('cascade');
        $table->foreignId('id_horario')->constrained('horarios')->onDelete('cascade');
        $table->string('estado_transaccion', 50);
        $table->decimal('total_pago', 10, 2);
        $table->string('metodo_pago', 50);
        $table->string('referencia', 255)->nullable();
        $table->timestamp('fecha_transaccion')->useCurrent();
        $table->timestamps();
    });
}

    
    


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transacciones');
    }
};
