<?php

require_once("../../Modelos/Proyectos/mInfante.php");

$infante = new Infante();


    $infante->actualizar_infante(  $_POST['iden'],
    							$_POST['nombre'],
                               	$_POST['apellido'],
                               	$_POST['fnato']
            );
?>
