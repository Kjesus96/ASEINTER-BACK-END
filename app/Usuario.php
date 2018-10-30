<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['correo', 'contraseña','cedula','nombre','apellidos','telefono','foto','privilegio'];
}
