<?php
    require_once("../../Modelos/Productos/mProducto.php");
    $producto = new Producto();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Actualizar producto</title>
         <style>
            body{
                font-family: Arial;
                background-color: #f2f8fa;
                width: 350;
                height: 450;
            }
            
            #formulario{
                margin-top: 6%;
            }
            
            input{
                display: block;
                padding: 10px;
                width: 100%;
            }
            
            input[type=submit]{
                padding: 10px;
                width: 90%;
            }
            
            .formulario{
                width: 300px;
                margin-bottom: 50px;
                margin: auto auto;
            }
            
            a, a:hover, a:active{
                text-decoration: none;
                color: #387385;
                font-size: 105%;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div id="formulario">
            <div class="formulario">
                <center><h3>Actualizar producto</h3><br>
                <?php 
                     if($consulta=$producto->consultar_producto($_POST['rdato'], $_POST['dato'])){
                        $cantidad = pg_num_rows($consulta);
                        if($cantidad>0){
                            $prod = $producto->datos();
                            echo '<form name="Registro" action="/Productos_BD/Controladores/Productos/cActualizar.php" method="POST">
                                 <table border="0">
                                    <tr>
                                        <td>ID:</td><td> <input disabled id="id_codigo" type="text" name="id_codigo" value="'.$prod[0].'"></td>
                                    </tr>
                                    <tr>
                                        <td>Codigo:</td><td> <input id="codigo" type="text" name="codigo" value="'.$prod[1].'" required></td>
                                    </tr>
                                    <tr>
                                        <td>Nombre: </td><td><input id="nombre" type="text" name="nombre" value="'.$prod[2].'" required></td>
                                    </tr>
                                    <tr>
                                        <td>Cantidad: </td><td><input id="cantidad" type="text" name="cantidad"  value="'.$prod[3].'" required></td>
                                    </tr>
                                    <tr>
                                        <td>Medida: </td><td><input id="medida" type="text" name="medida"  value="'.$prod[4].'" required></td>
                                    </tr>
                                    </table>
                                    <input id="id" type="hidden" name="id"  value="'.$prod[0].'" required>
                                    <input id="ingresar" type="submit" name="ingresar" value="Modificar">
                                    </table>
                                    </form>
                                    <br><br>
                                    <a href="../Principales/GUI_Menu.php">Regresar</a>';
                        }
                        else{
                            echo'<script>
                                    alert("No hay resultados del producto");
                                    top.location.href="/Productos_BD/Vistas/Principales/GUI_Menu.php";
                                 </script>';
                        }
                     }
                ?>
                
                </center>
            </div>
        </div>
    </body>
</html>