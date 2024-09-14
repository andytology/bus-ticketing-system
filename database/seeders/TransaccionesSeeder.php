<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB; // Add this line to import the DB class

class TransaccionesSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 30) as $index) {
            DB::table('transacciones')->insert([
                'id_usuario' => $faker->numberBetween(1, 50),
                'id_asiento' => $faker->numberBetween(1, 100),
                'id_horario' => $faker->numberBetween(1, 15),
                'estado_transaccion' => $faker->randomElement(['pendiente', 'completada', 'cancelada']),
                'total_pago' => $faker->randomFloat(2, 10, 150),
                'metodo_pago' => $faker->randomElement(['QR', 'Tarjeta', 'Efectivo']),
                'referencia' => $faker->uuid,
                'fecha_transaccion' => now(),
            ]);
        }
    }
}

