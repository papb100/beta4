<?php
// Conexion mysqli
include ("../conexion/conexionli.php");

date_default_timezone_set("America/Monterrey");

//Recibo valores con el metodo POST
$clave     = trim($_POST['clave']);
$nombre    = trim($_POST['nombre']);
$apPaterno = trim($_POST['apPaterno']);
$apMaterno = trim($_POST['apMaterno']);
$fNac      = trim($_POST['fNac']);
$edad      = trim($_POST['edad']);
$correo    = trim($_POST['correo']);
$curp      = trim($_POST['curp']);
$domicilio = trim($_POST['domicilio']);
$sexo      = trim($_POST['sexo']);
$ecivil    = trim($_POST['ecivil']);
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
				domicilio, 
				sexo, 
				ecivil, 
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
				'$domicilio',
				'$sexo',
				'$ecivil',
				'$fecha', 
				'$hora',
				$activo)";
$insertar = mysqli_query($conexionLi, $cadena);

//En caso de error imprime
print_r(mysqli_error($conexionLi));
//Cierro la conexion
mysqli_close($conexionLi);
?>