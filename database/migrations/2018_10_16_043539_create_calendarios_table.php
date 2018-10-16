<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendarios', function (Blueprint $table) {
            $table->engine = 'InnoDB';

		    $table->increments('IDCALENDARIO');
		    $table->string('TITULO');
		    $table->dateTime('DIA');
		    $table->string('DESCRIPCION')->nullable();
            $table->binary('FOTO')->nullable();
            $table->integer('CEDULA');

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
        Schema::dropIfExists('calendarios');
    }
}
