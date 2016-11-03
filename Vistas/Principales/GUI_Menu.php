<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Menu de producto</title>
        
        <style>
            body{
                font-family: Arial;
                background-color: #f2f8fa;
                width: 350;
                height: 450;
            }
            
            #menu{
                margin-top: 6%;
            }
            
            .menu{
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
        
        <div id="menu">
                <div class="menu">
                    <center><h2>Opciones de producto</h2><br><br>
                    <form id="ingresar" name="ingresar" action="/Productos_BD/Vistas/Productos/GUI_Ingreso.php" method="POST">
                        <input id="ingresar" name="ingresar" type="submit" value="Ingresar producto"><br><br>
                    </form>

                    <form id="listar" name="listar" action="/Productos_BD/Vistas/Productos/GUI_Listar.php" method="POST">
                        <input id="listar" name="listar" type="submit" value="Listar productos"><br><br>
                    </form>

                    <form id="consultar" name="consultar" action="/Productos_BD/Vistas/Productos/GUI_Consulta.php" method="POST">
                        <input id="pagina" type="hidden" name="pagina"  value="consultar">
                        <input id="consultar" name="boton" type="submit" value="Consultar producto"><br><br>
                    </form>

                    <form id="actualizar" name="actualizar" action="/Productos_BD/Vistas/Productos/GUI_Consulta.php" method="POST">
                        <input id="pagina" type="hidden" name="pagina"  value="actualizar">
                        <input id="actualizar" name="boton" type="submit" value="Actualizar producto"><br><br>
                    </form>

                    <form id="eliminar" name="eliminar" action="/Productos_BD/Vistas/Productos/GUI_Consulta.php" method="POST">
                        <input id="pagina" type="hidden" name="pagina"  value="eliminar">
                        <input id="eliminar" name="boton" type="submit" value="Eliminar producto">
                    </form>
                    <br><br>
                    <a href='../Principales/GUI_Login.php'>Logout</a>
                    </center>
                </div>
            </div>
        
        
    </body>
</html>
