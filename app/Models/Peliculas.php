<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{
    protected $fillable = ['name','date_publication','status','image'];

    public function turnos(){
        return $this->belongsToMany(Turnos::class, 'pelicula_turnos');
    }
}
