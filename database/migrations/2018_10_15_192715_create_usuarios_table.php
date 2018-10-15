<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->string('CORREO', 50);
		    $table->string('CONTRASENA', 15);
		    $table->integer('CEDULA')->unique();
		    $table->string('NOMBRE', 25);
		    $table->string('APELLIDOS', 40);
		    $table->string('TELEFONO', 25);
		    $table->binary('FOTO');
            $table->string('PRIVILEGIO', 15);
            $table->timestamps();
		
		    $table->primary('CEDULA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
