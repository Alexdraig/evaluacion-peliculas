@extends('layouts.plantilla')

@section('title','Turnos')

@section('content')
<main>
<div class="container">
    <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-3">
        <h1 class="h2">Turnos</h1>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-success" type="button" data-toggle="modal" data-target="#nuevoTurno">Nueva turno</button>
        </div>
    </div>
    @include('turno.modal-crear-turno')

    <div class="">
        <div class="card">
            <div class="card-body">
                <table id="peliculas" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Turno</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($turnos as $turno)
                        <tr>
                            <th>{{$turno->id}}</th>
                            <th>{{$turno->turn}}</th>
                            @if($turno->status == true)
                                <th>Activo</th>
                            @else
                                <th>Inactivo</th>
                            @endif
                            <th>
                                <button class="btn btn-light" title="Editar"><i class="fas fa-pencil-alt"></i></button>
                                <button class="btn btn-light" title="Asignar"><i class="fas fa-align-justify"></i></button>
                                @if($turno->status == true)
                                    <button class="btn btn-light" title="Activar"><i class="fas fa-lock"></i></button>
                                @else
                                    <button class="btn btn-light" title="Desactivar"><i class="fas fa-unlock-alt"></i></i></button>
                                @endif
                                <button class="btn btn-light" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</main>
@endsection

@section('script')
    <script type="text/javascript">
        $('#peliculas').DataTable({
            responsive:true,
            autoWidth:false,
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por p??gina",
                "zeroRecords": "No se encontro alg??n registro",
                "info": "Mostrando la p??gina _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                "search":"Buscar",
                "paginate":{
                    "next":"Siguiente",
                    "previous":"Anterior"
                }
            }
        });

        document.getElementById('image').onchange=function(e){
            let reader = new FileReader();
            reader.readAsDataURL(e.target.files[0]);
            reader.onload=function(){
                let preview =  document.getElementById('preview');
                image = document.createElement('img');
                image.src = reader.result;
                image.style.width = "250px";
                image.style.border = "1px solid #d0d0d0";
                preview.innerHTML='';
                preview.append(image);
            }
        }
    </script>
@endsection