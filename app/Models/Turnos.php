<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turnos extends Model
{
    protected $fillable = ['turn','status'];

    public function peliculas(){
        return $this->belongsToMany(Peliculas::class, 'pelicula_turnos');
    }
}
