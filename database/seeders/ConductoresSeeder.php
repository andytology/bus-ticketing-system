<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB; // Add this line

class ConductoresSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 5) as $index) {
            DB::table('conductores')->insert([
                'nombre' => $faker->firstName,
                'apellido' => $faker->lastName,
                'ci' => $faker->unique()->randomNumber(8),
                'licencia' => $faker->uuid,
                'fecha_expedicion' => $faker->date(),
                'años_experiencia' => $faker->numberBetween(1, 20),
            ]);
        }
    }
}
