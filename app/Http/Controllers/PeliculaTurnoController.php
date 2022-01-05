<?php

namespace App\Http\Controllers;

use App\Models\Pelicula_Turno;
use Illuminate\Http\Request;

class PeliculaTurnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelicula_turno = Pelicula_Turno::all();
        return $pelicula_turno;
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
        $pelicula_turno = new Pelicula_Turno();
        $pelicula_turno->pelicula_id = $request->pelicula_id;
        $pelicula_turno->turno_id = $request->turno_id;
        $pelicula_turno->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pelicula_Turno  $pelicula_Turno
     * @return \Illuminate\Http\Response
     */
    public function show(Pelicula_Turno $pelicula_Turno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pelicula_Turno  $pelicula_Turno
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelicula_Turno $pelicula_Turno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pelicula_Turno  $pelicula_Turno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $pelicula_turno = Pelicula_Turno::findOrFail($request->id);
        $pelicula_turno->pelicula_id = $request->pelicula_id;
        $pelicula_turno->turno_id = $request->turno_id;
        $pelicula_turno->save();

        return $pelicula_turno;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pelicula_Turno  $pelicula_Turno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelicula_Turno $pelicula_Turno)
    {
        $pelicula_turno = Pelicula_Turno::destroy($request->id);
        return $pelicula_turno;
    }
}
