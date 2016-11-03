<?php
    require_once("../../Modelos/Productos/mProducto.php");
    $productos = new Producto();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>Lista de productos</title>
        <link href="../../estilos.css" rel="stylesheet">
    </head>
    <body>
            <center>
                <div id='datos'>
                        <h3>Lista de productos</h3><br>
                        
                            <div class='titulo'>
                                
                            </div>
                            </tr>
                            <?php
                                if($consulta = $productos->cargar_productos()){
                                    
                                        $cantidad = pg_num_rows($consulta);
                                        if($cantidad>0){
                                            echo '<table border="1" class="tabla">
                                                    <tr><th>ID</td><th>Codigo</td><th>Nombre</td><th>Cantidad</td><th>Unidad de medida</td>';

                                            for($i=0;$i<$cantidad; $i++){
                                                $prod = $productos->datos();

                                                echo '<tr class="tdatos"><th>'.$prod[0].'</td><th>'.$prod[1].'</td><th>'.$prod[2].'</td><th>'.$prod[3].'</td><th>'.$prod[4].'</td></tr>';
                                            }
                                            echo '</table>
                                                <br><br>
                                                    <a href="../Principales/GUI_Menu.php">Regresar</a><br>';
                                        }
                                        else{
                                            echo'<script>
                                                alert("No hay productos registrados");
                                                top.location.href="/Productos_BD/Vistas/Principales/GUI_Menu.php";
                                            </script>';
                                        }
                                    
                                }
                            ?>
                            
                </div>
            </center>
    </body>
</html>
