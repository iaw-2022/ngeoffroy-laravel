<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipoSeeder extends Seeder
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
                "nombre" => "Club Indios",
                "logo" => "null",
                "nombre_estadio" => "Poli",
                "capitan" => "Piri"
            ],
            [
                "nombre" => "Club El Nacional",
                "logo" => "null",
                "nombre_estadio" => "Nacional",
                "capitan" => "Ruso Fernandez"
            ],
            [
                "nombre" => "Club Liniers",
                "logo" => "null",
                "nombre_estadio" => "Zibechi",
                "capitan" => "Juan Pintos"
            ],
            [
                "nombre" => "Gremio",
                "logo" => "null",
                "nombre_estadio" => "Parque",
                "capitan" => "Marcos"
            ],
            [
                "nombre" => "Bahia Softball",
                "logo" => "null",
                "nombre_estadio" => "Parque",
                "capitan" => "Hugo"
            ],
        ];

        DB::table('equipos')->insert($data);
    }
}