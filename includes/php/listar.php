<!--
<head>
    <meta charset="utf-8">
    <title>Velvet Contratista y Proveedora de Software</title>
    <link rel="icon" type="image/png" href="includes/images/logo.png"/>
    <link rel="stylesheet" type="text/css" href="includes/css/estilosBusquedaygestion.css">

    <script type="text/javascript" src="includes/js/bootstrap.js"></script>
    <script type="text/javascript" src="includes/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="includes/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="includes/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src=".../includes/js/ajax.js"></script>

</head>
-->


<?php

    include('conexion.php');

    $comentario=mysql_query("select co.IdComentario, co.Comentario, cl.Nombre, cl.Rut from clientes as cl, clientescomentarios as clco, comentario as co where co.Idcomentario=clco.Comentario_RutCliente and cl.Rut=clco.Clientes_Rut");
    echo '
    <div id="comentariosListados">    
        <table class="table  table-dark">
            <thead>
            <tr>
                <td>ID</th>
                <td>Comentario</th>
                <td>Nombre</th>
                <td>Rut</th>
                <td></td>
                <td></td>
            </tr>
            </thead>
            <tbody>
    ';

        while ($fila=mysql_fetch_array($comentario)) {
            echo "  
                <tr>
                <td>".$fila['IdComentario']."</td>
                <td>".$fila['Comentario']."</td>
                <td>".$fila['Nombre']."</td>
                <td>".$fila['Rut']."</td>
            </tbody>
        </table>
    </div>
            ";
        }
        mysql_close();
    
?>






