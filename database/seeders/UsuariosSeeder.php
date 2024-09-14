<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB; // Add this line

class UsuariosSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('usuarios')->insert([
                'nombre' => $faker->firstName,
                'apellido' => $faker->lastName,
                'ci' => $faker->unique()->numberBetween(1000000, 9999999),
                'email' => $faker->unique()->safeEmail,
                'telefono' => $faker->phoneNumber,
                'contraseña' => bcrypt('password'),
                'direccion' => $faker->address,
                'fecha_registro' => now(),
            ]);
        }
    }
}
