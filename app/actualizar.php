<?php
// Conexion MYSQL
include ("../conexiones/conexionli.php");

date_default_timezone_set("America/Monterrey");

//Recibo valores con el metodo POST
$id    	   = $_POST['id'];
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
$cadena = "UPDATE datos
			SET
				nombre='$nombre',
				ap_paterno='$apPaterno', 
				ap_materno='$apMaterno', 
				edad='$edad', 
				curp='$curp', 
				fecha_nac='$fNac', 
				correo='$correo', 
				fecha_registro='$fecha', 
				hora_registro='$hora'
			WHERE 
				id= $id";
$actualizar = mysqli_query($conexionLi, $cadena);

//En caso de error imprime
print_r(mysqli_error($conexionLi));
//Cierro la conexion
mysqli_close($conexionLi);
?>