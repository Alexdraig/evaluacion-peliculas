<?php

namespace App\Http\Controllers;

use App\Models\Turnos;
use Illuminate\Http\Request;

class TurnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turnos = Turnos::all();
        return view('turno.index', compact('turnos'));
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
        $turnos = new Turnos;

        $turnos->turn = $request->time;

        if(!isset($turnos['active'])){
            $turnos->status = false;
        }else{
            $turnos->status = true;
        }
        
        $turnos->save();
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Turnos  $turnos
     * @return \Illuminate\Http\Response
     */
    public function show(Turnos $turnos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Turnos  $turnos
     * @return \Illuminate\Http\Response
     */
    public function edit(Turnos $turnos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Turnos  $turnos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turnos $turnos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Turnos  $turnos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turnos $turnos)
    {
        //
    }
}
