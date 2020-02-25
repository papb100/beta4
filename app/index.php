<?php
    date_default_timezone_set('America/Monterrey');
    $fecha=date("Y-m-d"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Programa piloto</title>
     <!-- Bootstrap-4 -->
     <link rel="stylesheet" href="../plugins/bootstrap-4.0.0/dist/css/bootstrap.min.css">
     <!-- Estilos propios -->
     <link rel="stylesheet" href="../css/estilos.css">
     <!-- Alertifyjs -->
     <link rel="stylesheet" href="../plugins/alertifyjs/css/alertify.min.css">
     <link rel="stylesheet" href="../plugins/alertifyjs/css/themes/bootstrap.min.css">
     <!-- Fontawesome 5-->
     <link rel="stylesheet" href="../plugins/fontawesome-free-5.8.1-web/css/all.min.css">
     <!-- DataTables -->
     <link rel="stylesheet" href="../plugins/dataTablesB4/css/dataTables.bootstrap4.min.css">
     <link rel="stylesheet" href="../plugins/dataTablesB4/css/responsive.bootstrap4.min.css">
     <link rel="stylesheet" href="../plugins/dataTablesB4/css/responsive.dataTables.min.css">
     <!-- Animate -->
     <link rel="stylesheet" href="../plugins/animate/animate.css">
     <!-- Bootstrap Switch Button -->
     <link rel="stylesheet" href="../plugins/bootstrap4-toggle-master/css/bootstrap4-toggle.min.css">
</head>
<body>

    <div class="jumbotron jumbotron-fluid myJT animated  flipInX">
        <div class="container">
            <h1 class="display-4"><i class="far fa-user-circle"></i> Formulario de datos</h1>
            <p class="lead" id="titular">Captura de información</p>
        </div>
    </div>

    <div class="container">
        <section id="guardar">
            <form id="frmGuardar" class="animated  fadeInUp">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control " id="nombre" autofocus required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label for="apPaterno">Apellido Paterno:</label>
                            <input type="text" class="form-control activo" id="apPaterno" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label for="apMaterno">Apellido Materno:</label>
                            <input type="text" class="form-control activo" id="apMaterno" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2">
                        <div class="form-group">
                            <label for="fNac">Nacimiento:</label>
                            <input type="date" class="form-control activo" id="fNac" required value="<?php echo $fecha ?>">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2">
                        <div class="form-group">
                            <label for="edad">Edad:</label>
                            <input type="text" class="form-control activo" id="edad" readonly value=0>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="correo">Correo:</label>
                            <input type="text" class="form-control activo" id="correo" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                        <div class="form-group">
                            <label for="curp">Curp:</label>
                            <input type="text" class="form-control activo" id="curp" required>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col text-right">
                                <button  type="submit" class="btn btn-outline-dark  activo " id="btnGuardar">
                                    <i class='fa fa-save fa-lg'></i>
                                    Guardar Información
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

            </form>
        </section>

        <section id="editar" style="display:none;">
            <form id="frmActualizar" class="animated  fadeInUp">

            <input type="hidden"  id="eId">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label for="eNombre">Nombre:</label>
                            <input type="text" class="form-control " id="eNombre" autofocus required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label for="eApPaterno">Apellido Paterno:</label>
                            <input type="text" class="form-control activo" id="eApPaterno" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label for="eApMaterno">APellido Materno:</label>
                            <input type="text" class="form-control activo" id="eApMaterno" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2">
                        <div class="form-group">
                            <label for="efNac">Nacimiento:</label>
                            <input type="date" class="form-control activo" id="efNac" required value="<?php echo $fecha ?>">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2">
                        <div class="form-group">
                            <label for="eEdad">Edad:</label>
                            <input type="text" class="form-control activo" id="eEdad" readonly value=0>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="eCorreo">Correo:</label>
                            <input type="text" class="form-control activo" id="eCorreo" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                        <div class="form-group">
                            <label for="eCurp">Curp:</label>
                            <input type="text" class="form-control activo" id="eCurp" required>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col text-left">
                                <button  type="button" class="btn btn-outline-danger  activo " id="btnCancelar">
                                    <i class='fa fa-ban fa-lg'></i>
                                    Cancelar
                                </button>
                            </div>
                            <div class="col text-right">
                                <button  type="submit" class="btn btn-outline-success  activo " id="btnActualizar">
                                    <i class='fa fa-bolt fa-lg'></i>
                                    Actualizar Información
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

            </form>
        </section>

        <section id="Listado1" class="animated  fadeIn delay-1s"></section>
        
    </div>

    <!-- Modal de carga -->
        <?php include'modalCarga.php'; ?>
    <!-- Modal de carga -->
    
    <!-- jQuery -->
    <script src="../plugins/jQuery/jquery-3.3.1.js"></script>   
    <!-- Bootstrap-4 -->
    <script src="../plugins/bootstrap-4.0.0/dist/js/bootstrap.js"></script> 
    <!-- Alertifyjs -->  
    <script src="../plugins/alertifyjs/alertify.min.js"></script> 
    <!-- Funciones Propias -->
    <script src="funciones.js"></script>    
    <!-- DataTables -->
    <script src="../plugins/dataTablesB4/js/jquery.dataTables.min.js"></script>
    <script src="../plugins/dataTablesB4/js/dataTables.bootstrap4.min.js"></script>
    <!-- dataTableButtons -->
    <script type="text/javascript" src="../plugins/dataTableButtons/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="../plugins/dataTableButtons/buttons.flash.min.js"></script>
    <script type="text/javascript" src="../plugins/dataTableButtons/buttons.colVis.min.js"></script>
    <script type="text/javascript" src="../plugins/dataTableButtons/jszip.min.js"></script>
    <script type="text/javascript" src="../plugins/dataTableButtons/pdfmake.min.js"></script>
    <script type="text/javascript" src="../plugins/dataTableButtons/vfs_fonts.js"></script>
    <script type="text/javascript" src="../plugins/dataTableButtons/buttons.html5.min.js"></script>
    <script type="text/javascript" src="../plugins/dataTableButtons/buttons.print.min.js"></script>
    <!-- Bootstrap Switch Button -->
    <script type="text/javascript" src="../plugins/bootstrap4-toggle-master/js/bootstrap4-toggle.min.js"></script>
    <script>
        llenar_lista1();
    </script>


</body>
</html>
