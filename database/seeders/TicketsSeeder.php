<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this line
use Faker\Factory as Faker;

class TicketsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 30) as $index) {
            DB::table('tickets')->insert([
                'id_transaccion' => $faker->numberBetween(1, 30),
                'fecha_emision' => now(),
                'codigo_qr' => $faker->uuid,
                'estado_ticket' => $faker->randomElement(['emitido', 'usado', 'cancelado']),
            ]);
        }
    }
}

