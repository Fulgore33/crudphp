<?php 
require ("models/conexion.php");

$con = new conexion();

$usuario = $con -> consultar("SELECT * FROM usuarios");

require ("views/verUsuario.php");
?>