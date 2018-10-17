<?php

namespace App\Http\Controllers;

use App\EquipoTorneo;
use Illuminate\Http\Request;

class EquipoTorneoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipoTorneo = EquipoTorneo::get();
        echo json_encode($equipoTorneo);
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
        $equipoTorneo = new Usuarios();
        $equipoTorneo->IDTORNEO = $request->input('IDTORNEO');
        $equipoTorneo->IDEQUIPO = $request->input('IDEQUIPO');
        $equipoTorneo->timestamps = false;
        $equipoTorneo->save();

        echo json_encode($equipoTorneo);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EquipoTorneo  $equipoTorneo
     * @return \Illuminate\Http\Response
     */
    public function show(EquipoTorneo $equipoTorneo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EquipoTorneo  $equipoTorneo
     * @return \Illuminate\Http\Response
     */
    public function edit(EquipoTorneo $equipoTorneo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EquipoTorneo  $equipoTorneo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EquipoTorneo $equipoTorneo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EquipoTorneo  $equipoTorneo
     * @return \Illuminate\Http\Response
     */
    public function destroy(EquipoTorneo $equipoTorneo)
    {
        //
    }
}
