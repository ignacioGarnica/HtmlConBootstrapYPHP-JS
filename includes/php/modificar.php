<?php

    include('conexion.php');

    $rescateId = $_GET["rescateId"];
    $rescateComentario = $_GET["rescateComentario"];

    $modificar=mysql_query("UPDATE comentario SET Comentario = '$rescateComentario' WHERE IdComentario='$rescateId'");

    
    mysql_close()

?>