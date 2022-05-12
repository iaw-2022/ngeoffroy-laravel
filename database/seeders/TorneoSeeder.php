<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TorneoSeeder extends Seeder
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
                "nombre" => "Jorge Cáceres",
                "logo" => "https://drive.google.com/uc?export=view&id=1er4Yfkw94Sz4qGWfGfVzQKBHbR3IWroc",
                "fecha_ini" => "2022-04-29",
                "fecha_fin" => "2022-05-01"
            ],
            [
                "nombre" => "Invernal",
                "logo" => "https://drive.google.com/uc?export=view&id=1_gq45_MjlZmKWBiJSZX4NdjnSezbuEIS",
                "fecha_ini" => "2019-11-18",
                "fecha_fin" => "2019-11-21"
            ]
        ];
        DB::table('torneos')->insert($data);
    }
}

