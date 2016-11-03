<?php

require_once("../../Modelos/Productos/mProducto.php");

$producto = new Producto();


    $producto->Crear_Producto(  $_POST['codigo'],
                               	$_POST['nombre'], 
                               	$_POST['cantidad'],
                               	$_POST['medida']
            );
?>
