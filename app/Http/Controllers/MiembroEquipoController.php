<?php

namespace App\Http\Controllers;

use App\MiembroEquipo;
use Illuminate\Http\Request;

class MiembroEquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $MiembroEquipo = MiembroEquipo::get();
        echo json_encode($MiembroEquipo);
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
        $MiembroEquipo = new MiembroEquipo();
        $MiembroEquipo->IDEQUIPO = $request->input('IDEQUIPO');
        $MiembroEquipo->cedula = $request->input('CEDULA');
        $MiembroEquipo->timestamps = false;
        $MiembroEquipo->save();
        echo json_encode($MiembroEquipo);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MiembroEquipo  $miembroEquipo
     * @return \Illuminate\Http\Response
     */
    public function show(MiembroEquipo $miembroEquipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MiembroEquipo  $miembroEquipo
     * @return \Illuminate\Http\Response
     */
    public function edit(MiembroEquipo $miembroEquipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MiembroEquipo  $miembroEquipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MiembroEquipo $miembroEquipo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MiembroEquipo  $miembroEquipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(MiembroEquipo $miembroEquipo)
    {
        //
    }
}
