<form action="{{ route('turnos.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="modal" id="nuevoTurno" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Turnos</h5>
      </div>
      <div class="modal-body">
            <div class="row mb-3">
                <div class="col-3">
                    <label for="time" class="col-form-label">Turno</label>
                </div>
                <div class="col-6">
                    <input type="time" id="time" name="time" class="form-control">
                </div>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="activo" name="active" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Activo?
                </label>
            </div>
            <div class="row pt-3 pb-4 justify-content-center align-items-center">
                <button type="button" class="col-sm-2 mx-2 btn btn-danger" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="col-sm-2 mx-2 btn btn-primary">Guardar</button>
            </div>
      </div>
    </div>
  </div>
</div>
</form>