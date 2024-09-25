<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?= $titulo ?></h1>
    <ol class="breadcrumb mb-4">
      <!-- <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li> -->
      <li class="breadcrumb-item"><a href="?c=producto">Productos</a></li>
      <li class="breadcrumb-item"><?= $titulo ?></li>

    </ol>
    <div class="card mb-4">
      <div class="card-body">
        <?= $titulo ?> productos
        <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
        .
      </div>
    </div>
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        <?= $titulo ?> productos
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="card-body">
              <form method="post" action="?c=producto&a=Guardar">
                <!-- Hidden input para el id del producto -->
                <input type="hidden" id="idProd" name="idProd" value="<?= $p->getPro_id() ?>" />

                <div class="row mb-3">
                  <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                      <input
                        class="form-control"
                        id="inputNombre"
                        type="text"
                        name="nombre"
                        value="<?= $p->getPro_nombre() ?>" />
                      <label for=" inputNombre">Nombre</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating">
                      <input
                        class="form-control"
                        id="inputLastName"
                        type="text"
                        name="marca"
                        value="<?= $p->getPro_marca() ?>" />
                      <label for="inputLastName">Marca</label>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                      <input
                        class="form-control"
                        id="inputCosto"
                        type="number"
                        name="costo"
                        value="<?= $p->getPro_costo() ?>" />
                      <label for="inputCosto">Costo</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                      <input
                        class="form-control"
                        id="inputPrecio"
                        type="number"
                        name="precio"
                        value="<?= $p->getPro_precio() ?>" />
                      <label for=" inputPrecio">Precio</label>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                      <input
                        class="form-control"
                        id="inputCantidad"
                        type="number"
                        name="cantidad"
                        value="<?= $p->getPro_cantidad() ?>" />
                      <label for="inputCantidad">Cantidad</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <input
                      class="form-control"
                      id="inputImagen"
                      type="file"
                      name="imagen" />
                    <label for="inputImagen"></label>
                  </div>
                </div>

                <div class="mt-4 mb-0 text-center">
                  <button
                    type="submit"
                    class="btn btn-primary">
                    Enviar
                  </button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</main>