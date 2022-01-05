<?php

namespace App\Http\Controllers;

use App\Models\Peliculas;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculas = Peliculas::all();
        return view('pelicula.index', compact('peliculas'));
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
        //$peliculas = $request->all();
        $pelicula = new Peliculas;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $destinationPath = 'images/peliculas/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSucess = $request->file('image')->move($destinationPath, $filename);
            $pelicula->image = $destinationPath . $filename;
        }
        $pelicula->name = $request->name;
        $pelicula->date_publication = $request->date;
        $pelicula->status = true;
        $pelicula->save();

        return redirect()->back();
        //return response()->json($peliculas);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peliculas  $peliculas
     * @return \Illuminate\Http\Response
     */
    public function show(Peliculas $peliculas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peliculas  $peliculas
     * @return \Illuminate\Http\Response
     */
    public function edit(Peliculas $peliculas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peliculas  $peliculas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peliculas $peliculas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peliculas  $peliculas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peliculas $peliculas)
    {
        //
    }
}
