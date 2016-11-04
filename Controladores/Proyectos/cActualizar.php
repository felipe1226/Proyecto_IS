<?php

require_once("../../Modelos/Productos/mProyectos.php");

$proyecto = new Proyecto();


    $proyecto->actualizar_Proyecto(  $_POST['id'],
    							$_POST['codigo'],
                               	$_POST['nombre'], 
                               	$_POST['cantidad'],
                               	$_POST['medida']
            );
?>
