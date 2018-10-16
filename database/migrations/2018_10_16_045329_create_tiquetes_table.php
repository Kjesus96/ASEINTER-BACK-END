<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiquetes', function (Blueprint $table) {
            $table->integer('IDTIQUETE');
            $table->dateTime('FECHA');
            $table->integer('CEDULA');
            $table->string('MOTIVO');

            $table->primary(['IDTIQUETE', 'FECHA']);
            $table->foreign('CEDULA')->references('CEDULA')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiquetes');
    }
}
