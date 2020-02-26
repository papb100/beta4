<?php
// Conexion mysqli
include ("../conexion/conexionli.php");

date_default_timezone_set("America/Monterrey");

//Recibo valores con el metodo POST
$id          = $_POST['id'];
$contravalor = $_POST['contravalor'];

$fecha=date("Y-m-d"); 
$hora=date ("H:i:s");

mysqli_set_charset($conexionLi, 'utf8');	//Sin esta linea los caracteres especiales como acentos y tildes no se ven.

//Inserto registro en tabla pacientes 
$cadena = "UPDATE datos 
			SET
				activo=$contravalor,
				fecha_registro='$fecha',
				hora_registro='$hora'
			WHERE 
				id= $id";

echo $contraValor;
$actualizar = mysqli_query($conexionLi, $cadena);

//En caso de error imprime
print_r(mysqli_error($conexionLi));
//Cierro la conexion
mysqli_close($conexionLi);
?>