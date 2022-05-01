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
                "equipo_local" => 2,
                "equipo_visitante" => 4,
                "resultado_local" => 7,
                "resultado_visita" => 6,
                "localidad_id" => 1,
                "torneo_id"=> 1,
                "estado" => "FINALIZADO"  
            ],
            [
                "equipo_local" => 5,
                "equipo_visitante" => 3,
                "resultado_local" => 0,
                "resultado_visita" => 0,
                "localidad_id" => 2,
                "torneo_id"=> 1,
                "estado" => "POR JUGAR"  
              ],
        ];

        DB::table('partidos')->insert($data);
    }
}