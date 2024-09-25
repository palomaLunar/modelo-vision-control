<?php
class DataBase
{
  // Constastes de la base de datos
  const SERVIDOR = 'localhost';
  const USUARIODB = 'root';
  const PASSDB = '';
  const NOMBREDB = 'proyecto_mvc';

  // Conexión a la base de datos
  public static function Conectar()
  {
    try {
      $conexion = new PDO("mysql:host=" . self::SERVIDOR . ";dbname=" . self::NOMBREDB . ";charset=utf8", self::USUARIODB, self::PASSDB);
      $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conexion;
    } catch (PDOException $e) {
      die("Error: " . $e->getMessage());
    }
  }
}
