//Variables globales
var blanco   = "#ffffff";
var negro    = "#000000";
var obscuro  = "#343A40";
var azul     = "#1278F4";
var verde    = "#2AA44E";
var rojo     = "#D9304B";
var amarillo = "#FFC107";
var celeste  = "#17A2B8";

$("#frmGuardar").submit(function(e){

    var clave    = $("#clave").val();
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
        data:{clave,nombre,apPaterno,apMaterno,edad,fNac,correo,curp},
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
    var fNac      = $("#eFNac").val();
    var edad      = $("#eEdad").val();
    var correo    = $("#eCorreo").val();
    var curp      = $("#eCurp").val();
    var clave      = $("#eClave").val();

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

function llenar_formulario(id,nombre,apPaterno,apMaterno,fNac,edad,correo,curp,clave){
    $("#eId").val(id);
    $("#eNombre").val(nombre);
    $("#eApPaterno").val(apPaterno);
    $("#eApMaterno").val(apMaterno);
    $("#efNac").val(fNac);
    $("#eEdad").val(edad);
    $("#eCorreo").val(correo);
    $("#eCurp").val(curp);
    $("#eClave").val(clave);
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
                $("#btnModal"+consecutivo).removeAttr('disabled');
                //log("Usuario activo registro");
            }else{
                alertify.error("<i class='fa fa-times fa-lg'></i>", 2);
                $("#btnEditar"+consecutivo).attr('disabled','disabled');
                $("#btnImprimir"+consecutivo).attr('disabled','disabled');
                $("#btnModal"+consecutivo).attr('disabled','disabled');
                //log("Usuario desactivo registro");
            }
        },
        error:function(xhr,status){
            alert("Error en metodo AJAX"); 
        },
    });

}

function abrirModalDatos(id,nombre,apPaterno,apMaterno,fNac,edad,correo,curp,clave) {
    $("#modalTitle").text("Datos personales - "+nombre+' '+apPaterno);

    $("#mNombre").val(nombre);
    $("#mApPaterno").val(apPaterno);
    $("#mApMaterno").val(apMaterno);
    $("#mFNac").val(fNac);
    $("#mEdad").val(edad);
    $("#mCorreo").val(correo);
    $("#mCurp").val(curp);
    $("#mClave").val(clave);

    $("#modalDatos").modal("show");
}

function cambioColor(duracion , colorF , mensaje , colorL=blanco){
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
    cambioColor('.5s' , azul , "Captura de Información",negro)
});

$("#btnCancelar").mouseover(function(){
    cambioColor('.5s' , rojo , 'Cancelar edición de datos')
});

$("#btnActualizar").mouseover(function(){
    cambioColor('.5s' , verde , 'Actualizar datos personales')
});

$("#btnGuardar").mouseover(function(){
    cambioColor('.5s' , obscuro , 'Actualizar datos personales',blanco)
});

$("#btnActualizar , #btnCancelar , #btnGuardar").mouseout(function(){
    cambioColor('.5s' , azul , 'Actualizar de Información')
});

function mov_lista(){
    $(".imprimir").mouseover(function(){
        if ($(this).is('[disabled]')) {
            cambioColor('.5s' , rojo , 'Imprimir datos personales','#fff')
        }else{
            cambioColor('.5s' , amarillo , 'Imprimir datos personales','#000')
        }
        
    });
    
    $(".editar").mouseover(function(){
        if ($(this).is('[disabled]')) {
            cambioColor('.5s' , rojo , 'Editar datos personales')
        }else{
            cambioColor('.5s' , verde , 'Editar datos personales')
        }
    });

    $(".ventana").mouseover(function(){
        if ($(this).is('[disabled]')) {
            cambioColor('.5s' , rojo , 'Mostrar ventana modal')
        }else{
            cambioColor('.5s' , celeste , 'Mostrar ventana modal')
        }
    });

    $("#btnGuardar").mouseover(function(){
        if ($(this).is('[disabled]')) {
            cambioColor('.5s' , rojo , 'Editar datos personales')
        }else{
            cambioColor('.5s' , obscuro , 'Editar datos personales')
        }
    });
    
    $(".imprimir , .editar , .ventana").mouseout(function(){
        cambioColor('.5s' , '#1278F4' , 'Captura de Información')
    });

    $("#clave").keydown(function(event) {
        if(event.shiftKey)
        {
             event.preventDefault();
        }
     
        if (event.keyCode == 46 || event.keyCode == 9 || event.keyCode == 8 )    {
        }
        else {
             if (event.keyCode < 95) {
               if (event.keyCode < 45 || event.keyCode > 57) {
                     event.preventDefault();
               }
             } 
             else {
                   if (event.keyCode < 96 || event.keyCode > 105) {
                       event.preventDefault();
                   }
             }
           }
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


function abrirModalPDF(id) {

    $("#txtTitularPDF").text("Datos Personales")

    var link = "pdfDatos.php?id="+id ;
    PDFObject.embed(link, "#visualizador");

    $("#modalPDF").modal("show");

}

function curpValida(e) {
    // Convierte en mayuscula
    e.value = e.value.toUpperCase();

    var curp=$(e).val();

    // Expresion regular para curp
    var re = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
        validado = curp.match(re);
    
    if (!validado){  //Coincide con el formato general?
        $("#btnGuardar").attr('disabled','disabled');
        $(e).css("color", rojo);
    }else{
        $("#btnGuardar").removeAttr('disabled');
        $(e).css("color", obscuro);
    }
}

