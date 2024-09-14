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
    Schema::create('conductores', function (Blueprint $table) {
        $table->id(); // Esto define 'id' como la clave primaria con auto-incremento
        $table->string('nombre', 100);
        $table->string('apellido', 100);
        $table->string('ci', 20)->unique();
        $table->string('licencia', 255);
        $table->date('fecha_expedicion');
        $table->integer('años_experiencia');
        $table->timestamps();
    });
}

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conductores');
    }
};
