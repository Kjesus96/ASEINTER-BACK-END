<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMiembroEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miembro_equipos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('IDEQUIPO')->unique();
            $table->integer('CEDULA');

            
            $table->foreign('CEDULA')->references('CEDULA')->on('usuarios');    
            $table->foreign('IDEQUIPO')->references('IDEQUIPO')->on('equipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('miembro_equipos');
    }
}
