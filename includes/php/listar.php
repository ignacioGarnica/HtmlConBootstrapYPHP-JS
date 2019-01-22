<html>

<?php

    include('conexion.php');

    $comentario=mysql_query("select co.IdComentario, co.Comentario, cl.Nombre, cl.Rut from clientes as cl, clientescomentarios as clco, comentario as co where co.Idcomentario=clco.Comentario_RutCliente and cl.Rut=clco.Clientes_Rut");
    
?>
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
<?php
        while ($fila=mysql_fetch_array($comentario)) {
            
            $IdComentario=$fila['IdComentario'];
            $Comentario=$fila['Comentario'];
            $Nombre=$fila['Nombre'];
            $Rut=$fila['Rut'];
?>
            <tr>
                <td class='text-center'><?php echo $IdComentario;?></td>
                <td ><?php echo $Comentario;?></td>
                <td ><?php echo $Nombre;?></td>
                <td ><?php echo $Rut;?></td>
                <td><?php
                    echo "<td><button class='btn btn-primary' onclick=\"eliminarComentario('".$fila['IdComentario']."')\">Eliminar</button></td>";
                    echo "<td><button class='btn btn-primary' id='botonModificar'>Modificar</button></td>";
                    ?>
                </td>
            </tr>
        <?php 
        }
        ?>

            </tbody>            
        </table>
    </div>  







