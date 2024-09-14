<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB; // Add this line to import the DB class

class HorariosSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 15) as $index) {
            DB::table('horarios')->insert([
                'id_ruta' => $faker->numberBetween(1, 10),
                'hora_salida' => $faker->time(),
                'fecha_salida' => $faker->date(),
            ]);
        }
    }
}

