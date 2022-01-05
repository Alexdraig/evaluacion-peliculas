<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculaTurnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelicula__turnos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelicula_id')
                ->nullable()
                ->constrained('peliculas')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('turno_id')
                ->nullable()
                ->constrained('turnos')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->string('api_token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelicula__turnos');
    }
}
