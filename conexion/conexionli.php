<?php

//variables para conexion
$db_host = "localhost";
$db_name = "beta";
$db_user = "root";
$db_pass = "xoops8305";

//cadena de conexion
$conexionLi=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if(mysqli_connect_errno()){
 printf(mysqli_connect_error());
}
?>