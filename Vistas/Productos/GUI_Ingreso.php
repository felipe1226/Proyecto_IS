<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ingreso de producto</title>
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
                width: 108%;
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
    
                <form name="Registro" action="/Productos_BD/Controladores/Productos/cProducto.php" method="POST">
                    <center><h3>Ingreso de nuevo producto</h3><center><br><br>
                    <input id="codigo" type="text" name="codigo" placeholder="Codigo" required>
                    <input id="nombre" type="text" name="nombre" placeholder="Nombre" required>
                    <input id="cantidad" type="text" name="cantidad"  placeholder="Cantidad disponible" required>
                    <input id="medida" type="text" name="medida"  placeholder="Unidad de medida" required>
                    <input id="ingresar" type="submit" name="ingresar" value="Ingresar"><br><br>
                    
                    <a href="../Principales/GUI_Menu.php">Regresar</a>
                 </form>
            </div>
        </div>
    </body>
</html>


              