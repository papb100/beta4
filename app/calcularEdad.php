<?php
// funcion de usuario
include ("../funciones/calcularEdad.php");

$fecha  = $_POST['fecha'];

echo CalculaEdad( $fecha );

?>