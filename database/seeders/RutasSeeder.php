<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RutasSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('rutas')->insert([
                'origen' => $faker->city,
                'destino' => $faker->city,
                'precio' => $faker->randomFloat(2, 5, 100),
                'distancia' => $faker->randomFloat(2, 50, 1000),
            ]);
        }
    }
}

