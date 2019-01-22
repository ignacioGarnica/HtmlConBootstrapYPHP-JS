<?php

    include('conexion.php');

    $rescate = $_GET["IdComentario"];

    mysql_query("DELETE FROM comentario WHERE IdComentario='$rescate'") or die('Error. '.mysql_error());
    mysql_query("DELETE FROM clientescomentarios WHERE Comentario_RutCliente='$rescate'") or die('Error. '.mysql_error());

    mysql_close()

?>