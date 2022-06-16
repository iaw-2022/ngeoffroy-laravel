<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "equipo_local" => 'Club Indios',
                "equipo_visitante" => 'Club Liniers',
                "resultado_local" => 7,
                "resultado_visita" => 6,
                "localidad_nombre" => "Bahia Blanca",
                "torneo_nombre"=> "Invernal",
                "estado" => "FINALIZADO"  
            ],
            [
                "equipo_local" => 'Gremio',
                "equipo_visitante" => 'Club El Nacional',
                "resultado_local" => 0,
                "resultado_visita" => 0,
                "localidad_nombre" => "Paraná",
                "torneo_nombre"=> "Invernal",
                "estado" => "POR JUGAR"  
              ],
        ];

        DB::table('partidos')->insert($data);
    }
}