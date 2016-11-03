<?php

require_once("../../Modelos/Productos/mProducto.php");

$producto = new Producto();


    $producto->eliminar_Producto(  $_POST['id']
            );
?>
