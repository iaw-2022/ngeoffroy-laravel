<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JugadorSeeder extends Seeder
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
                "nombre" => "Nicolas",
                "apellido" => "Geoffroy",
                "dni" => "38231672",
                "fecha_nac" => "1994-08-13",
                "sexo" => "masculino",
                "puesto" => "jardinero derecho",
                "equipo_nombre" => "Club Indios"
            ],
            [
                "nombre" => "Prueba",
                "apellido" => "NumeroDos",
                "dni" => "1234567",
                "fecha_nac" => "1990-02-24",
                "sexo" => "masculino",
                "puesto" => "catcher",
                "equipo_nombre" => "Club El Nacional"
            ],
            [
                "nombre" => "Prueba",
                "apellido" => "NumeroTres",
                "dni" => "4444666",
                "fecha_nac" => "1999-11-19",
                "sexo" => "femenino",
                "puesto" => "pitcher",
                "equipo_nombre" => "Club Liniers"
            ],
            [
                "nombre" => "Otra",
                "apellido" => "Prueba",
                "dni" => "7777777",
                "fecha_nac" => "2003-01-10",
                "sexo" => "femenino",
                "puesto" => "primera",
                "equipo_nombre" => "Club Liniers"
            ],
            [
                "nombre" => "Otro",
                "apellido" => "Caso",
                "dni" => "4444444",
                "fecha_nac" => "1981-03-03",
                "sexo" => "masculino",
                "puesto" => "pitcher",
                "equipo_nombre" => "Gremio"
            ],
            [
                "nombre" => "Prueba",
                "apellido" => "NumeroCinco",
                "dni" => "4111121",
                "fecha_nac" => "1996-12-13",
                "sexo" => "femenino",
                "puesto" => "short",
                "equipo_nombre" => "Bahia Softball"
            ]
        ];

        DB::table('jugadors')->insert($data);
    }
}
