<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RutasSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RutasSeeder::class,
            BusesSeeder::class,
            ConductoresSeeder::class,
            AsientosSeeder::class,
            UsuariosSeeder::class,
            HorariosSeeder::class,
            AsignacionBusesSeeder::class,
            TransaccionesSeeder::class,
            TicketsSeeder::class,
        ]);
    }
}

