<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->timestamps();
            $table->string('equipo_local');
            $table->string('equipo_visitante');
            $table->integer('resultado_local');
            $table->integer('resultado_visita');
            $table->string('localidad_nombre');
            $table->string('torneo_nombre');
            $table->string('estado');
            $table->foreign('localidad_nombre')->references('nombre')->on('localidads')->onDelete('cascade');
            $table->foreign('torneo_nombre')->references('nombre')->on('torneos')->onDelete('cascade');
            $table->foreign('equipo_local')->references('nombre')->on('equipos')->onDelete('cascade');
            $table->foreign('equipo_visitante')->references('nombre')->on('equipos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partidos');
    }
};
