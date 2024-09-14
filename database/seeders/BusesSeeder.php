<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB; // Add this line

class BusesSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('buses')->insert([
                'numero_bus' => $faker->unique()->numerify('Bus ###'),
                'capacidad' => $faker->numberBetween(20, 50),
                'tipo' => $faker->randomElement(['Minibús', 'Bus']),
                'id_ruta' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}


