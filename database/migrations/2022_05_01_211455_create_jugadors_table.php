<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\jugador;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadors', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('dni')->unique();
            $table->date("fecha_nac");
            $table->string("sexo");
            $table->string("puesto");
            $table->string('equipo_nombre');
            $table->foreign('equipo_nombre')->references('nombre')->on('equipos')->ondDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jugadors');
    }
};
