<?php

require_once("../../Modelos/Productos/mProducto.php");

$producto = new Producto();


    $producto->actualizar_Producto(  $_POST['id'],
    							$_POST['codigo'],
                               	$_POST['nombre'], 
                               	$_POST['cantidad'],
                               	$_POST['medida']
            );
?>
