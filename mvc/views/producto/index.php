<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">Productos</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
      <li class="breadcrumb-item active">Productos</li>
    </ol>
    <div class="card mb-4">
      <div class="card-body">
        Lista total de productos
        <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
        .
      </div>
    </div>
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <div>
          <i class="fas fa-table me-1"></i>
          Lista de productos
        </div>
        <!-- Creo un botón para agragar -->
        <div>
          <a href="?c=producto&a=CrearProd" class="btn btn-primary btn-flat">
            <i class="fa fa-lg fa-plus"></i>
          </a>
        </div>
      </div>


      <div class="card-body">
        <table id="datatablesSimple">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Marca</th>
              <th>Costo</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Imagen</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
            </tr>
          </tfoot>
          <tbody>
            <?php foreach ($this->modelo->Listar() as $res): ?>
              <tr>
                <td><?= $res->id ?></td>
                <td><?= $res->nombre ?></td>
                <td><?= $res->marca ?></td>
                <td><?= $res->costo ?></td>
                <td><?= $res->precio ?></td>
                <td><?= $res->cantidad ?></td>
                <td><?= $res->imagen ?></td>
                <td>
                  <a href="?c=producto&a=CrearProd&id=<?= $res->id ?>" class="btn btn-success">
                    <i class="fa fa-lg fa-refresh"></i>
                  </a>
                  <a href="?c=producto&a=Borrar&id=<?= $res->id ?>" class="btn btn-danger ">
                    <i class="fa fa-lg fa-trash"></i>
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>