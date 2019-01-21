window.onload = function (){
    cargar();    
}

 function cargar(){

    /*$.ajax({
        type: "POST",
        dataType: "html",
        url: "localhost/HtmlConBootstrapYPHP&JS/includes/php/listar.php",
        data: "perro",
        success:function(data){
            $("#listaComentarios").html(data);
        }
    });*/

    $('#listaComentarios').load('includes/php/listar.php');
}


function registrar(){

    var nombre      = $("#inputNombre").val();
    var rut         = $("#rutInput").val();
    var email       = $("#inputEmail").val();
    var telefono    = $("#inputFono").val();
    var comentario  = $("#comentario").val();
    
    $.ajax({
        type: "POST",
        dataType: 'html',
        url: "localhost/HtmlConBootstrapYPHP&JS/includes/php/guardar.php",
        data: "nombre="+nombre+"&rut="+rut+"&email="+email+"&telefono="+telefono+"&comentario="+comentario,
        success:function(){
          limpiar()  
        }
    });
}

function limpiar(){

    $("#inputNombre").val("");
    $("#rutInput").val("");
    $("#inputEmail").val("");
    $("#inputFono").val("");
    $("#comentario").val("");
}

