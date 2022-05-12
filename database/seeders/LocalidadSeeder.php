<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalidadSeeder extends Seeder
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
                "nombre" => "Bahia Blanca",
                "cod_postal" => "8000",
                "cant_habitantes" => 300000
            ],
            [
                "nombre" => "Paraná",
                "cod_postal" => "3100",
                "cant_habitantes" => 200000
            ],
            [
                "nombre" => "La Pampa",
                "cod_postal" => "6300",
                "cant_habitantes" => 350000
            ]
            ];

        DB::table('localidads') ->insert($data);
    }
}