<?php
// Conexion mysqli
include ("../conexion/conexionli.php");

date_default_timezone_set("America/Monterrey");

//Recibo valores con el metodo POST
$valor = $_POST['valor'];

$fecha = date("Y-m-d"); 
$hora  = date ("H: i: s");

mysqli_set_charset($conexionLi, 'utf8');	//Sin esta linea los caracteres especiales como acentos y tildes no se ven.

//Inserto registro en tabla pacientes 
$cadena = "SELECT
				clave 
			FROM
				datos 
			WHERE
				clave = $valor";

$actualizar = mysqli_query($conexionLi, $cadena);
$row_cnt = $actualizar->num_rows;

echo $row_cnt;
//Cierro la conexion
mysqli_close($conexionLi);
?>