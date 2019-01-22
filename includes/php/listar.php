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
                    echo "<td><button data-toggle='modal' data-target='#modal_modificar".$IdComentario."' class='btn btn-primary' id='botonModificar'>Modificar</button></td>";

                    echo "<div id='modal_modificar".$IdComentario."' class='modal' role='dialog'>
                            <div class='modal-dialog'>
                                                    <!-- Modal content-->
                                <div class='modal-content'>
                                <div class='modal-header'>
                                    <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                    <h4 class='modal-title'>Modificar Comentario</h4>
                                </div>
                                <div class='modal-body'>
                                    <label for='inputID' class='col-sm-6 col-form-label'>ID comentario</label>
                                    <input type='number' name='inputID' value=".$fila['IdComentario']." disabled></input>
                                    <textarea id='comentarioCajita".$IdComentario."' name='rescateComentario' rows='10' style='margin-top: 20px; width: 38em;'>".$fila['Comentario']."
                                    </textarea>
                                    <br><br><br>
                                </div>
                                <div class='modal-footer'>
                                    <button data-dismiss='modal' class='btn' onclick=\"modificarComentario('".$fila['IdComentario']."')\" >Modificar Comentario</button>
                                </div>
                            </div>
                        </div>";

                    ?>
            </tr>
        <?php 
        }
        ?>

            </tbody>            
        </table>
    </div>  







