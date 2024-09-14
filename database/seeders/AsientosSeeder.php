<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB; // Add this line to import the DB class

class AsientosSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('asientos')->insert([
                'numero_asiento' => $faker->numberBetween(1, 50),
                'estado' => $faker->randomElement(['disponible', 'reservado']),
                'id_bus' => $faker->numberBetween(1, 20),
            ]);
        }
    }
}

