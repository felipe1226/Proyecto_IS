<?php

require_once("../../Modelos/Proyectos/mComunidad.php");

$comunidad = new Comunidad();


    $comunidad->actualizar_comunidad(  $_POST['codigo'],
    							$_POST['etnia'],
                               	$_POST['nombre'],
                               	$_POST['poblacion'],
                               	$_POST['representante']
            );
?>
