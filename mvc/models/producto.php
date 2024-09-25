<?php
require_once "db.php";

class Producto
{
  private $pdo;

  private $prod_id;
  private $prod_nombre;
  private $prod_marca;
  private $prod_costo;
  private $prod_precio;
  private $prod_cantidad;
  private $prod_imagen;

  public function __construct()
  {
    $this->pdo = DataBase::Conectar();
  }
  /* MÉTODOS GETTERS Y SETTERS */

  //* id

  public function getPro_id(): ?int
  {
    return $this->prod_id;
  }
  public function setPro_id(int $id)
  {
    $this->prod_id = $id;
  }

  //* nombre

  public function getPro_nombre(): ?string
  {
    return $this->prod_nombre;
  }
  public function setPro_nombre(string $nombre)
  {
    $this->prod_nombre = $nombre;
  }

  //* marca

  public function getPro_marca(): ?string
  {
    return $this->prod_marca;
  }
  public function setPro_marca(string $marca)
  {
    $this->prod_marca = $marca;
  }

  //* costo

  public function getPro_costo(): ?float
  {
    return $this->prod_costo;
  }
  public function setPro_costo(float $costo)
  {
    $this->prod_costo = $costo;
  }

  //* precio

  public function getPro_precio(): ?float
  {
    return $this->prod_precio;
  }
  public function setPro_precio(float $precio)
  {
    $this->prod_precio = $precio;
  }

  //* cantidad

  public function getPro_cantidad(): ?int
  {
    return $this->prod_cantidad;
  }
  public function setPro_cantidad(int $cantidad)
  {
    $this->prod_cantidad = $cantidad;
  }

  //* imagen

  public function getPro_imagen(): ?string
  {
    return $this->prod_imagen;
  }
  public function setPro_imagen($imagen)
  {
    $this->prod_imagen = $imagen;
  }


  /***************************************************************/
  /********************AHORA VAMOS A CREAR OTROS MÉTODOS**********/

  /** MÉTODO CANTIDAD */
  public function Cantidad()
  {
    try {
      $sql = "SELECT SUM(cantidad) as Cantidad FROM productos;";

      $consulta = $this->pdo->prepare($sql);
      $consulta->execute();

      return $consulta->fetch(PDO::FETCH_OBJ);
      //

    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  /** MÉTODO LISTAR PRODUCTOS */

  public function Listar()
  {
    try {
      $sql = "SELECT * FROM productos";
      $consulta = $this->pdo->prepare($sql);
      $consulta->execute();
      return $consulta->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }


  /* MÉTODO PARA INSERTAR PRODUCTOS */
  public function Insertar(Producto $p)
  {
    try {
      $sql = "INSERT INTO productos (nombre, marca, costo, precio, cantidad, imagen) VALUES (:nombre, :marca, :costo, :precio, :cantidad, :imagen)";
      $consulta = $this->pdo->prepare($sql);
      $consulta->bindParam(":nombre", $p->getPro_nombre());
      $consulta->bindParam(":marca", $p->getPro_marca());
      $consulta->bindParam(":costo", $p->getPro_costo());
      $consulta->bindParam(":precio", $p->getPro_precio());
      $consulta->bindParam(":cantidad", $p->getPro_cantidad());
      $consulta->bindParam(":imagen", $p->getPro_imagen());
      $consulta->execute();
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }


  /* MÉTODO PARA OBTENER PRODUCTO SELECCIONADO */
  public function Obtener($id)
  {
    try {
      $sql = "SELECT * FROM productos WHERE id = :id";
      $consulta = $this->pdo->prepare($sql);
      $consulta->bindParam(":id", $id);
      $consulta->execute();
      $res = $consulta->fetch(PDO::FETCH_OBJ);

      $p = new Producto();
      $p->setPro_id($res->id);
      $p->setPro_nombre($res->nombre);
      $p->setPro_marca($res->marca);
      $p->setPro_costo($res->costo);
      $p->setPro_precio($res->precio);
      $p->setPro_cantidad($res->cantidad);
      $p->setPro_imagen($res->imagen);
      return $p;
    } catch (PDOException $e) {
      die("ERROR: " . $e->getMessage());
    }
  }

  /* MÉTODO PARA ACTUALIZAR PRODUCTO */
  public function Actualizar(Producto $p)
  {
    try {
      $sql = "UPDATE productos SET nombre = :nombre, marca = :marca, costo = :costo, precio = :precio, cantidad = :cantidad, imagen = :imagen WHERE id = :id";
      $consulta = $this->pdo->prepare($sql);
      $consulta->bindParam(":id", $p->getPro_id());
      $consulta->bindParam(":nombre", $p->getPro_nombre());
      $consulta->bindParam(":marca", $p->getPro_marca());
      $consulta->bindParam(":costo", $p->getPro_costo());
      $consulta->bindParam(":precio", $p->getPro_precio());
      $consulta->bindParam(":cantidad", $p->getPro_cantidad());
      $consulta->bindParam(":imagen", $p->getPro_imagen());
      $consulta->execute();
    } catch (PDOException $e) {
      die("ERROR: " . $e->getMessage());
    }
  }


  /* MÉTODO PARA ELIMINAR PRODUCTO */
  public function Eliminar($id)
  {
    try {
      $sql = "DELETE FROM productos WHERE id = :id";
      $consulta = $this->pdo->prepare($sql);
      $consulta->bindParam(":id", $id);
      $consulta->execute();
    } catch (PDOException $e) {
      die("ERROR: " . $e->getMessage());
    }
  }
}
