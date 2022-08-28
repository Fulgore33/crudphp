<?php 
require ("models/conexion.php");

$objConexion = new conexion();

$usuario = $objConexion -> consultar("SELECT * FROM usuarios");

require ("views/verUsuario.php");
?>