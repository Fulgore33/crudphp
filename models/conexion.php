<?php
class conexion
{
    private $servidor = "localhost";
    private $usuario = "root";
    private $pass = "";
    private $conexion;

    public function __construct()
    {
        try {
            $this->conexion = new PDO("mysql:host=$this->servidor;dbname=crud_mvc", $this->usuario, $this->pass);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            return "Fallo la conexion" . $e;
        }
    }
    public function ejecutar($sql)
    { // Esta funcion me sirve para ejecutar el Insert / Delete / Update.
        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();
    }
    public function consultar($sql)
    {
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();
    }
}
