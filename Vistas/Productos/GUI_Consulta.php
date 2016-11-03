<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar producto</title>
        <style>
            body{
                font-family: Arial;
                background-color: #f2f8fa;
                width: 350;
                height: 450;
            }
            
            #login{
                margin-top: 6%;
            }
            
            input{
                display: block;
                padding: 10px;
                width: 100%;
            }
            
            input[type=submit]{
                padding: 10px;
                width: 108%;
            }
            
            .login{
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
        <div id="login">
            <div class="login">

            <?php
                if($_POST['pagina']== "consultar"){
                    echo '<form id="formulario" action="/Productos_BD/Vistas/Productos/GUI_VisConsulta.php" method="POST">
                    <input id="accion" type="hidden" name="accion"  value="consultar">';
                }
                if($_POST['pagina']=="actualizar"){
                    echo '<form id="formulario" action="/Productos_BD/Vistas/Productos/GUI_Actualizar.php" method="POST">';
                }
                if($_POST['pagina']=="eliminar"){
                    echo '<form id="formulario" action="/Productos_BD/Vistas/Productos/GUI_VisConsulta.php" method="POST">
                    <input id="accion" type="hidden" name="accion"  value="eliminar">';
                }
            ?>
                
                    <center><h2>Consulta de producto</h2>
                    Buscar por:<input type="radio" name="rdato" value="codigo">Codigo
                    <input type="radio" name="rdato" value="nombre">Nombre</input>
                    <input type="text" id="dato" name="dato" placeholder="Buscar" required>
                    <input id="boton" type="submit" name="boton" value="Consultar"><br><br>
                    <a href="../Principales/GUI_Menu.php">Regresar</a>
                    </center>
                </form>
            </div>
        </div>
    </body>
</html>