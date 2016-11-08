<?php

require_once("../../Modelos/Proyectos/mProyectos.php");

$proyecto = new Proyecto();


    $proyecto->actualizar_Proyecto(  $_POST['cod'],
    							$_POST['titulo'],
                               	$_POST['descripcion'], 
                               	$_POST['alcance'],
                               	$_POST['presupuesto'],
                               	$_POST['fechai'], 
                               	$_POST['fechaf'],
                               	$_POST['responsable']
            );
?>
