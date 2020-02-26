<?php
// Conexion mysqli
include ("../conexion/conexionli.php");

date_default_timezone_set("America/Monterrey");

//Recibo valores con el metodo POST
$actividad    = trim($_POST['actividad']);

$fecha=date("Y-m-d"); 
$hora=date ("H:i:s");

mysqli_set_charset($conexionLi, 'utf8');	//Sin esta linea los caracteres especiales como acentos y tildes no se ven.

//Inserto registro en tabla pacientes 
$cadena = "INSERT INTO log
				(actividad,
				fecha_registro, 
				hora_registro)
			VALUES
				('$actividad',
				'$fecha', 
				'$hora')";
				
$insertar = mysqli_query($conexionLi, $cadena);

//En caso de error imprime
print_r(mysqli_error($conexionLi));
//Cierro la conexion
mysqli_close($conexionLi);
?>