<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipoTorneosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo_torneos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('IDTORNEO')->nullable($value = false);
            $table->integer('IDEQUIPO')->nullable($value = false);

            $table->foreign('IDTORNEO')->references('IDTORNEO')->on('torneos');
            $table->foreign('IDEQUIPO')->references('IDEQUIPO')->on('equipos');

            $table->unique(['IDTORNEO','IDEQUIPO']);
            $table->dropPrimary('IDTORNEO');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipo_torneos');
    }
}
