<?php

require_once("../../Modelos/Proyectos/mProyectos.php");

$proyecto = new Proyecto();


    $proyecto->Crear_Proyecto(  $_POST['codigo'],
                               	$_POST['titulo'], 
                               	$_POST['descripcion'],
                               	$_POST['alcance']
            );
?>
