<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>

    <div class="row">
      <div class="col-xl-6">
        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-chart-area me-1"></i>
            CANTIDAD DE PRODUCTOS
          </div>
          <div class="card-body">
            <?php
            $p = $this->modelo->Cantidad();
            echo $p->Cantidad;
            ?>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-chart-bar me-1"></i>
            LISTA DE PRODUCTO
          </div>
          <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
        </div>
      </div>
    </div>

  </div>
</main>