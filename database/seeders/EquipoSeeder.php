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
                "logo" => "https://drive.google.com/uc?export=view&id=1Z5vDBV4jvGQq0L-rV5X6PM_Xl4e7EjJN",
                "nombre_estadio" => "Poli",
                "capitan" => "Piri"
            ],
            [
                "nombre" => "Club El Nacional",
                "logo" => "https://drive.google.com/uc?export=view&id=1k46olutVnDhBWYyiAAqM73lJ6uptE3OR",
                "nombre_estadio" => "Nacional",
                "capitan" => "Ruso Fernandez"
            ],
            [
                "nombre" => "Club Liniers",
                "logo" => "https://drive.google.com/uc?export=view&id=1e7kjot_VW95NkI0OTnMYvnEjYbP4AFc_",
                "nombre_estadio" => "Zibechi",
                "capitan" => "Juan Pintos"
            ],
            [
                "nombre" => "Gremio",
                "logo" => "https://drive.google.com/uc?export=view&id=1Dx-Nx32lYMGsqdsosNSQcIOlCjC5FQ3f",
                "nombre_estadio" => "Parque",
                "capitan" => "Marcos"
            ],
            [
                "nombre" => "Bahia Softball",
                "logo" => "https://drive.google.com/uc?export=view&id=1jXap3Ow0k5CGvL9MMwccbpXlis7s14BM",
                "nombre_estadio" => "Parque",
                "capitan" => "Hugo"
            ],
        ];

        DB::table('equipos')->insert($data);
    }
}