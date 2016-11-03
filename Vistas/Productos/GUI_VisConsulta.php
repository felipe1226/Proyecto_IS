<?php
    require_once("../../Modelos/Productos/mProducto.php");
    $producto = new Producto();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>Consulta de producto</title>
        <link href="../../estilos.css" rel="stylesheet">
    </head>
    <body>
            <center>
                <div id='datos'>
                        <h3>Producto consultado</h3><br>
                            <?php
                                if($consulta=$producto->consultar_producto($_POST['rdato'], $_POST['dato'])){
                                    $cantidad = pg_num_rows($consulta);
                                    if($cantidad>0){
                                        $prod = $producto->datos();
                                        echo '<table border="1" class="tabla1">
                                                <tr><th>ID</td><td>'.$prod[0].'</td></tr>
                                                <tr><th>Codigo</td><td>'.$prod[1].'</td></tr>
                                                <tr><th>Nombre</td><td>'.$prod[2].'</td></tr>
                                                <tr><th>Cantidad</td><td>'.$prod[3].'</td></tr>
                                                <tr><th>Medida</td><td>'.$prod[4].'</td></tr>
                                               </table>';

                                        if($_POST['accion']=="eliminar"){
                                            echo '</table><br><br>
                                                  <form name="eliminar" action="/Productos_BD/Controladores/Productos/cEliminar.php" method="POST">
                                                    <input id="id" type="hidden" name="id"  value="'.$prod[0].'">
                                                    <input id="eliminar" type="submit" name="eliminar"  value="Eliminar producto">
                                                  </form>';
                                                  
                                        }
                                        echo '<br><br>
                                                <a href="../Principales/GUI_Menu.php">Regresar</a><br>';
                                    }
                                    else{
                                        echo'<script>
                                                alert("No hay resultados del producto");
                                                top.location.href="/Productos_BD/Vistas/Principales/GUI_Menu.php";
                                            </script>';
                                    }
                                }
                            ?>
                            
                </div>
            </center>
    </body>
</html>
