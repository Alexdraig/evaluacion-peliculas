<form action="{{ route('peliculas.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="modal" id="nuevaPelicula" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Peliculas</h5>
      </div>
      <div class="modal-body">
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
                    <input type="file" id="image" name="image" class="form-control mb-3" value="Subir Imagen">
                    <div id="preview"></div>
                </div>
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