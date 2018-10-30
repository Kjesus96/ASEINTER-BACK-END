<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Usuario::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->CORREO = $request->input('CORREO');
        $usuario->CONTRASENA = $request->input('CONTRASENA');
        $usuario->ID = $request->input('ID');
        $usuario->NOMBRE = $request->input('NOMBRE');
        $usuario->APELLIDOS = $request->input('APELLIDOS');
        $usuario->TELEFONO = $request->input('TELEFONO');
        $usuario->FOTO = $request->input('FOTO');
        $usuario->PRIVILEGIO = $request->input('PRIVILEGIO');
        $usuario->timestamps = false;
        $usuario->save();

        echo json_encode($usuario);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        return $usuario;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return 204;
    }

}
