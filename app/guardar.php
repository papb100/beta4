<?php
// Conexion MYSQL
include ("../conexiones/conexionli.php");

date_default_timezone_set("America/Monterrey");

//Recibo valores con el metodo POST
$clave    = trim($_POST['clave']);
$nombre    = trim($_POST['nombre']);
$apPaterno = trim($_POST['apPaterno']);
$apMaterno = trim($_POST['apMaterno']);
$fNac      = trim($_POST['fNac']);
$edad      = trim($_POST['edad']);
$correo    = trim($_POST['correo']);
$curp      = trim($_POST['curp']);
$activo    = 1;

$fecha=date("Y-m-d"); 
$hora=date ("H:i:s");

mysqli_set_charset($conexionLi, 'utf8');	//Sin esta linea los caracteres especiales como acentos y tildes no se ven.

//Inserto registro en tabla pacientes 
$cadena = "INSERT INTO datos
				(clave,
				nombre,
				ap_paterno, 
				ap_materno, 
				edad, 
				curp, 
				fecha_nac, 
				correo, 
				fecha_registro, 
				hora_registro,
				activo)
			VALUES
				('$clave',
				'$nombre',
				'$apPaterno', 
				'$apMaterno', 
				'$edad', 
				'$curp', 
				'$fNac', 
				'$correo', 
				'$fecha', 
				'$hora',
				$activo)";
$insertar = mysqli_query($conexionLi, $cadena);

//En caso de error imprime
print_r(mysqli_error($conexionLi));
//Cierro la conexion
mysqli_close($conexionLi);
?>