<?php
header("Location: http://localhost/HtmlConBootstrapYPHP&JS/insertado.html"); 
include("conexion.php");
    
    
        $nombre     = $_POST["nombre"];
        $rut        = $_POST["rut"];
        $email      = $_POST["email"];
        $telefono   = $_POST["telefono"];
        $comentario = $_POST["comentario"];
        //$orientacion= $_POST["orientacion"];



        mysql_query("INSERT INTO clientes(Rut, Nombre, Email, Fono) VALUES ('$rut', '$nombre', '$email', '$telefono')");
        mysql_query("INSERT INTO comentario(Comentario /*, TiposComentarios_Tipo*/) VALUES ( '$comentario'/*,'$orientacion'*/)");

        mysql_query("INSERT INTO clientescomentarios(Clientes_Rut) VALUES ('$rut')");

        
        mysql_close($conexion);
    

?>

