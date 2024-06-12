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
            $table->id();
            $table->unsignedBigInteger('campeonato_id');
            $table->foreign('campeonato_id')->references('id')->on('campeonatos')->onDelete('cascade');
            $table->unsignedBigInteger('equipo_a_id');
            $table->foreign('equipo_a_id')->references('id')->on('equipos')->onDelete('cascade');
            $table->unsignedBigInteger('equipo_b_id');
            $table->foreign('equipo_b_id')->references('id')->on('equipos')->onDelete('cascade');
            $table->dateTime('fecha_hora');
            $table->string('lugar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partidos');    //
    }
};
