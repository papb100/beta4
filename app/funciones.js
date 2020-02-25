$("#frmGuardar").submit(function(e){

    var nombre    = $("#nombre").val();
    var apPaterno = $("#apPaterno").val();
    var apMaterno = $("#apMaterno").val();
    var fNac      = $("#fNac").val();
    var edad      = $("#edad").val();
    var correo    = $("#correo").val();
    var curp      = $("#curp").val();

    $.ajax({
        url:"guardar.php",
        type:"POST",
        dateType:"html",
        data:{nombre,apPaterno,apMaterno,edad,fNac,correo,curp},
        success:function(respuesta){
            console.log(respuesta);
                llenar_lista1();
                $("#frmGuardar")[0].reset();
                alertify.success("<i class='fa fa-save fa-lg'></i>", 2);
            $('#nombre').focus();
            log("Usuario inserto registro");

        },
        error:function(xhr,status){
            alert("Error en metodo AJAX"); 
        },
    });
    e.preventDefault();
    return false;
});

$("#frmActualizar").submit(function(e){

    var id    = $("#eId").val();
    var nombre    = $("#eNombre").val();
    var apPaterno = $("#eApPaterno").val();
    var apMaterno = $("#eApMaterno").val();
    var fNac      = $("#efNac").val();
    var edad      = $("#eEdad").val();
    var correo    = $("#eCorreo").val();
    var curp      = $("#eCurp").val();

    $.ajax({
        url:"actualizar.php",
        type:"POST",
        dateType:"html",
        data:{id,nombre,apPaterno,apMaterno,edad,fNac,correo,curp},
        success:function(respuesta){
            llenar_lista1();
                $("#frmGuardar")[0].reset();
                $("#frmActualizar")[0].reset();
                alertify.success("<i class='fa fa-bolt fa-lg'></i>", 2);
            $("#btnCancelar").click();
            log("Usuario modifico registro");
            $('#nombre').focus();
        },
        error:function(xhr,status){
            alert("Error en metodo AJAX"); 
        },
    });
    e.preventDefault();
    return false;
});

function llenar_lista1(){
    //color azul
    abrirModalCarga('Cargando Lista');
    $("#Listado1").hide();
    $.ajax({
        url:"lista1.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#Listado1").html(respuesta);
            $("#Listado1").slideDown('slow');
            cerrarModalCarga();
            $("#nombre").focus();
        },
        error:function(xhr,status){
            alert("Error en metodo AJAX"); 
        },
    });
}

function abrirModalCarga(mensaje) {
    $("#modalCarga").modal("show");
    $("#msjCarga").text(mensaje);
}

function cerrarModalCarga(mensaje) {
    $("#modalCarga").modal("hide");
}

function edad(fecha){
    $.ajax({
        url:"calcularEdad.php",
        type:"POST",
        dateType:"html",
        data:{fecha},
        success:function(respuesta){
            console.log(respuesta);
            $("#edad").val(respuesta);
            $("#eEdad").val(respuesta);
        },
        error:function(xhr,status){
            alert("Error en metodo AJAX"); 
        },
    });
}

function llenar_formulario(id,nombre,apPaterno,apMaterno,fNac,edad,correo,curp){
    $("#eId").val(id);
    $("#eNombre").val(nombre);
    $("#eApPaterno").val(apPaterno);
    $("#eApMaterno").val(apMaterno);
    $("#efNac").val(fNac);
    $("#eEdad").val(edad);
    $("#eCorreo").val(correo);
    $("#eCurp").val(curp);
    $("#titular").text("Actualizar información");
    $("#guardar").hide();
    $("#Listado1").hide();
    $("#editar").show();
    $("#eNombre").focus();
}
//Verifica el tamaño de la pantalla
$(document).ready(function(){
    $(window).resize(function() {
      if ($(this).width() <= 700){
        $(".btn").addClass("btn-block");
      }else{
        $(".btn").removeClass("btn-block");
      }
    });
  });

function cambiar_estatus(id,consecutivo){

    var valor=$("#check"+consecutivo).val();
    var contravalor=(valor==1)?0:1;
    $("#check"+consecutivo).val(contravalor);

    $.ajax({
        url:"cEstatus.php",
        type:"POST",
        dateType:"html",
        data:{id,contravalor},
        success:function(respuesta){
            console.log(respuesta);
            if(contravalor==1){
                alertify.success("<i class='fa fa-check fa-lg'></i>", 2);
                $("#btnEditar"+consecutivo).removeAttr('disabled');
                $("#btnImprimir"+consecutivo).removeAttr('disabled');
                log("Usuario activo registro");
            }else{
                alertify.error("<i class='fa fa-times fa-lg'></i>", 2);
                $("#btnEditar"+consecutivo).attr('disabled','disabled');
                $("#btnImprimir"+consecutivo).attr('disabled','disabled');
                log("Usuario desactivo registro");
            }
        },
        error:function(xhr,status){
            alert("Error en metodo AJAX"); 
        },
    });

}

function abrirModalDatos(id,nombre,apPaterno,apMaterno,fNac,edad,correo,curp) {
    $("#modalTitle").text("Datos personales - "+nombre+' '+apPaterno);

    $("#mNombre").val(nombre);
    $("#mApPaterno").val(apPaterno);
    $("#mApMaterno").val(apMaterno);
    $("#mfNac").val(fNac);
    $("#mEdad").val(edad);
    $("#mCorreo").val(correo);
    $("#mCurp").val(curp);

    $("#modalDatos").modal("show");
}

function cambioColor(duracion , colorF , mensaje , colorL="#fff"){
    //color azul
    $(".jumbotron , .hTabla").css({
        transition : 'background-color'+ duracion +' ease-in-out',
        "background-color": colorF,
        color: colorL
    });

    $("body").css({
        transition : 'background'+ duracion +' ease-in-out',
        background: '#FFEFBA',  /* fallback for old browsers */
        background: '-webkit-linear-gradient(to right, #FFFFFF, '+colorF+')',  /* Chrome 10-25, Safari 5.1-6 */
        background: 'linear-gradient(to right, #FFFFFF,'+colorF+')' /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    });


    $("#titular").html(mensaje);
}

//Manipulacion de eventos con jquery
$("#fNac , #efNac").change(function(){
    var fecha = $(this).val();
    edad(fecha);
});

$("#btnCancelar").click(function(){
    $("#editar").hide();
    $("#Listado1").show();
    $("#guardar").show();
    //color azul
    cambioColor('.5s' , '#1278F4' , "Captura de Información",'#000')
});

$("#btnCancelar").mouseover(function(){
    //color rojo
    cambioColor('.5s' , '#D9304B' , 'Cancelar edición de datos')
});

$("#btnActualizar").mouseover(function(){
    //color verde
    cambioColor('.5s' , '#2AA44E' , 'Actualizar datos personales')
});

$("#btnGuardar").mouseover(function(){
    //color verde
    cambioColor('.5s' , '#343A40' , 'Actualizar datos personales','#fff')
});

$("#btnActualizar , #btnCancelar , #btnGuardar").mouseout(function(){
    //color azul
    cambioColor('.5s' , '#1278F4' , 'Actualizar de Información')
});

function mov_lista(){
    $(".imprimir").mouseover(function(){
        //color celeste
        cambioColor('.5s' , '#FFC107' , 'Imprimir datos personales','#000')
    });
    
    $(".editar").mouseover(function(){
        //color verde
        cambioColor('.5s' , '#2AA44E' , 'Editar datos personales')
    });

    $(".ventana").mouseover(function(){
        //color verde
        cambioColor('.5s' , '#17A2B8' , 'Editar datos personales')
    });
    
    $(".imprimir , .editar , .ventana").mouseout(function(){
        //color azul
        cambioColor('.5s' , '#1278F4' , 'Captura de Información')
    });
}
//Manipulacion de eventos con jquery

function log(actividad){
    $.ajax({
        url:"log.php",
        type:"POST",
        dateType:"html",
        data:{actividad},
        success:function(respuesta){

        },
        error:function(xhr,status){
            alert("Error en metodo AJAX"); 
        },
    });
   
}