<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(LocalidadSeeder::class);
        $this->call(TorneoSeeder::class);
        $this->call(EquipoSeeder::class);
        $this->call(JugadorSeeder::class);
        $this->call(PartidoSeeder::class);
    }
}
