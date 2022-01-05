@extends('layouts.plantilla')

@section('title','Peliculas')

@section('styles')
<link href="{{ asset('css/pelicula.css') }}" rel="stylesheet">
@endsection

@section('content')
<main>
<div class="container">
    <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-3">
        <h1 class="h2">Películas</h1>
    </div>
    <form action="{{ route('peliculas.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="row mb-3">
            <div class="col-3">
                <label for="name" class="col-form-label">Nombres</label>
            </div>
            <div class="col-6">
                <input type="text" id="names" name="name" class="form-control">
            </div>
        </div>

            <div class="row mb-3">
                <div class="col-3">
                    <label for="date" class="col-form-label">F. Publicación</label>
                </div>
                <div class="col-6">
                    <input type="date" id="date" name="date" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-3">
                    <label for="image" class="col-form-label">Imagen</label>
                </div>
                <div class="col-6">
                    <input type="file" id="image" name="image" class="form-control mb-3" value="Subir Imagen" accept=".jpg,.png,.jpeg">
                    <div id="preview"></div>
                </div>
            </div>
        
            
                <button type="submit" class="col-sm-2 mx-2 btn btn-primary">Guardar</button>
            
    </form>
</div>
@endsection