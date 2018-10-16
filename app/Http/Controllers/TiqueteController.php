<?php

namespace App\Http\Controllers;

use App\Tiquete;
use Illuminate\Http\Request;

class TiqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiquete = Tiquete::get();
        echo json_encode($tiquete);
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
        $tiquete = new Tiquete();
        $tiquete->IDTIQUETE = $request->input('IDTIQUETE');
        $tiquete->FECHA = $request->input('FECHA');
        $tiquete->CEDULA = $request->input('CEDULA');
        $tiquete->MOTIVO = $request->input('MOTIVO');
        $tiquete->timestamps = false;
        $tiquete->save();
        echo json_encode($tiquete);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tiquete  $tiquete
     * @return \Illuminate\Http\Response
     */
    public function show(Tiquete $tiquete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tiquete  $tiquete
     * @return \Illuminate\Http\Response
     */
    public function edit(Tiquete $tiquete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tiquete  $tiquete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tiquete $tiquete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tiquete  $tiquete
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tiquete $tiquete)
    {
        //
    }
}
