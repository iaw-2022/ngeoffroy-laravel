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
            $table->integer('equipo_id');
            $table->foreign('equipo_id')->references('id')->on('equipos')->ondDelete('cascade');;
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
