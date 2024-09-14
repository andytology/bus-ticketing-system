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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id(); // Esto define la columna 'id' como clave primaria
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('ci', 20)->unique();
            $table->string('email', 100)->unique();
            $table->string('telefono', 20);
            $table->string('contraseña', 255);
            $table->string('direccion', 255);
            $table->timestamp('fecha_registro')->useCurrent();
            $table->timestamps();
        });
    }
    


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
