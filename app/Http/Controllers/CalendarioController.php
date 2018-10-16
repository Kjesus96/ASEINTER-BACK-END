<?php

namespace App\Http\Controllers;

use App\calendario;
use Illuminate\Http\Request;

class CalendarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calendario = Calendario::get();
        echo json_encode($calendario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $calendario = new Calendario();
        $calendario->IDCALENDARIO = $request->input('IDCALENDARIO');
        $calendario->TITULO = $request->input('TITULO');
        $calendario->DIA = $request->input('DIA');
        $calendario->DESCRIPCION = $request->input('DESCRIPCION');
        $calendario->FOTO = $request->input('FOTO');
        $calendario->CEDULA = $request->input('CEDULA');
        $calendario->timestamps = false;
        $calendario->save();

        echo json_encode($calendario);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\calendario  $calendario
     * @return \Illuminate\Http\Response
     */
    public function show(calendario $calendario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\calendario  $calendario
     * @return \Illuminate\Http\Response
     */
    public function edit(calendario $calendario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\calendario  $calendario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, calendario $calendario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\calendario  $calendario
     * @return \Illuminate\Http\Response
     */
    public function destroy(calendario $calendario)
    {
        //
    }
}
