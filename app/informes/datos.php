<?php 
// Conexion mysqli
include'../conexion/conexionli.php';

include ("../funciones/calcularEdad.php");
include ("../funciones/fechaEspanol.php");

$Id=$_REQUEST["id"];

date_default_timezone_set('America/Monterrey');

//Set charset a cadena de conexion
mysqli_set_charset($conexionLi, 'utf8');
                
$cadena = "SELECT
                id,
                nombre,
                ap_paterno,
                ap_materno,
                fecha_nac,
                edad,
                correo,
                curp,
                activo
            FROM
                datos
            WHERE
                id = $Id";
$consultar = mysqli_query($conexionLi, $cadena);


//Descargamos el arreglo que arroja la consulta
$n=1;
$row = mysqli_fetch_array($consultar);
// arreglo de variables
$nombre     = $row[2];
$paterno    = $row[3];
$materno    = $row[4];
$fNac       = $row[5];
$nacimiento = date("d-m-Y", strtotime($row[5]));
$edad       = $row[6];
$correo     = $row[7];
$curp       = $row[8];

$fecha=date("Y-m-d"); 

$fCastellano=fechaCastellano($fecha);

 ?>

<style type="text/css">
<!--
table
{
    width:  90%;
    border: solid 0px #5544DD;
    margin:auto;
}

hr{
  border: solid 1px #34495e;
}

table.borde
{
    width:  90%;
    border: solid 1px #D8D8D8;
    margin:auto;
}
th
{
    text-align: center;
    border: solid 0px #113300;
    background: #EEFFEE;
}
th.borde
{
    text-align: center;
    border: solid 1px #D8D8D8;
    background: #EEFFEE;
}


td.borde
{
    text-align: left;
    border: solid 1px #D8D8D8;
    padding: 10px;
    text-align: center;
}
td.col1
{
    border: solid 0px red;
    text-align: right;
}

td.titular
{
    text-align: center;
    border: solid 1px #34495e;
    background: #ecf0f1;
    color:#34495e;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 3px;
    padding: 10px;

}

td.titular2
{
    text-align: center;
    border: solid 0px #34495e;
    background: #fff;
    color:#000;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 3px;
    padding: 15px;
    font-size:20px;

}

label.enfa{
    text-decoration: underline;
}

td.subtitular
{
    text-align: center;
    border: solid 1px #34495e;
    background: #ffffff;
    color:#34495e;
    letter-spacing: 3px;
    padding: 15px;

}

td.fecha
{
    text-align: right;
    border: solid 0px #34495e;
    background: #ffffff;
    color:#34495e;
    letter-spacing: 3px;
    padding: 18px;

}
/*hojas de estilo propia*/
img{
    width: 100%;
}

/*letras*/
.chico{font-size: 11px;}  .mediano{font-size: 15px;}  .grande{font-size:18px;}
.subrayado{text-decoration: underline;} .firma {font-size: 13px;font-style: italic;}

.ancho{width:20px; };

.bajo{
    display: block;
    margin: 15px 0px 0px 0px;
    background: #ccc;
}
/**/
-->
</style>

<table border="0">
    <col style="width: 100%" class="col1">

    <tr>
        <td>
            <img src="../images/encabezado.jpg" alt="">
        </td>
    </tr>

</table>


<table border="0">
    <col style="width: 10%">
    <col style="width: 10%">
    <col style="width: 10%">
    <col style="width: 10%">
    <col style="width: 10%">
    <col style="width: 10%">
    <col style="width: 10%">
    <col style="width: 10%">
    <col style="width: 10%">
    <col style="width: 10%">
    <!-- defino el ancho de la tabla -->
    <tr border="0">
        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>

    <tr >
        <td  colspan="10" class="titular2">
            DATOS GENERALES DEL ALUMNO
        </td>
    </tr> 

    <tr >
        <td  colspan="10" class="titular">
            Datos personales del Alumno
        </td>
    </tr>   

    <tr >
        <td  colspan="7" class="borde">
            <strong>Nombre del Alumno :</strong> <?php echo "$row[2]"; ?>
        </td>
        <td  colspan="3" class="borde">
            <strong>Teléfono :</strong> <?php echo "$row[4]"; ?>
        </td>
    </tr>   

    <tr >
        <td  colspan="7" class="borde">
            <strong>Correo electrónico :</strong> <?php echo "$row[5]"; ?>
        </td>
        <td  colspan="3" class="borde">
            <strong>Sexo :</strong> <?php echo "$sexo"; ?>
        </td>
    </tr> 

    <tr >
        <td  colspan="5" class="borde">
            <strong>Fecha de nacimiento :</strong> <?php echo "$fechaE"; ?>
        </td>
        <td  colspan="3" class="borde">
            <strong>Estado civil :</strong> <?php echo "$row[12]"; ?>
        </td>
        <td  colspan="2" class="borde">
            <strong>Edad :</strong> <?php echo "$edads"; ?>
        </td>
    </tr> 

    <tr >
        <td  colspan="10" class="borde">
            <strong>Registro federal del contribuyente (RFC) :</strong> <?php echo "$row[10]"; ?>
        </td>
    </tr> 

    <tr >
        <td  colspan="10" class="borde">
            <strong>Clave única de registro de población (CURP):</strong> <?php echo "$row[11]"; ?>
        </td>
    </tr> 


    <tr >
        <td  colspan="6" class="borde">
            <strong>Domicilio local:</strong> <?php echo "$row[6]"; ?>
        </td>
        <td  colspan="4" class="borde">
            <strong>Teléfono del domicilio local :</strong> <?php echo "$row[17]"; ?>
        </td>
    </tr> 

    <tr >
        <td  colspan="6" class="borde">
            <strong>Domicilio foráneo:</strong> <?php echo "$row[9]"; ?>
        </td>
        <td  colspan="4" class="borde">
            <strong>Teléfono del domicilio foráneo :</strong> <?php echo "$row[18]"; ?>
        </td>
    </tr> 
    <tr >
        <td  colspan="12" class="borde">
            <strong>Padre , madre o tutor:</strong> <?php echo "$row[22]"; ?>
        </td>
    </tr> 



    <tr >
        <td  colspan="10" class="fecha">
            <strong>Fecha de impresión:</strong> <?php echo $fCastellano; ?>
        </td>
    </tr> 

    <tr>
        <td  colspan="10" align="center">
            <hr>
        </td>
    </tr>

</table>
