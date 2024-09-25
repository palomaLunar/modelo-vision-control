<?php

require_once "models/producto.php";

class ProductoControlador
{
  private $modelo;

  public function __construct()
  {
    $this->modelo = new Producto();
  }

  public function Inicio()
  {
    require_once "views/encabezado.php";
    require_once "views/producto/index.php";
    require_once "views/pie.php";
  }

  /** CREAR PRODUCTO */
  public function CrearProd()
  {
    $titulo = "Registrar";
    $p = new Producto();
    //He entrado a la opción de actualizar
    if (isset($_GET['id'])) {
      $p = $this->modelo->Obtener($_GET['id']);
      $titulo = "Actualizar";
    }

    require_once "views/encabezado.php";
    require_once "views/producto/crear.php";
    require_once "views/pie.php";
  }


  /** GUARDAR PRODUCTO */
  public function Guardar()
  {
    $p = new Producto();
    $p->setPro_id(intval($_POST['idProd']));
    $p->setPro_nombre($_POST['nombre']);
    $p->setPro_marca($_POST['marca']);
    $p->setPro_costo($_POST['costo']);
    $p->setPro_precio($_POST['precio']);
    $p->setPro_cantidad($_POST['cantidad']);

    //Si el id está vacío es porque es un nuevo producto
    $p->getPro_id() > 0
      ? $this->modelo->Actualizar($p)
      : $this->modelo->Insertar($p);
    header("Location: ?c=producto");
  }

  /* BORRAR PRODUCTO */
  public function Borrar()
  {
    $this->modelo->Eliminar($_GET['id']);
    header("Location:?c=producto");
  }
}
