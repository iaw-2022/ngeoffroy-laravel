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
                "nombre" => "Primaveral",
                "logo" => "null",
                "fecha_ini" => "2022-05-22",
                "fecha_fin" => "2022-10-19"
            ],
            [
                "nombre" => "Invernal",
                "logo" => "null",
                "fecha_ini" => "2022-03-08",
                "fecha_fin" => "2022-4-29"
            ]
        ];
        DB::table('torneos')->insert($data);
    }
}

