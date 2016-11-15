<?php

require_once("../../Modelos/Proyectos/mRepresentante.php");

$representante = new Representante();


    $representante->actualizar_representante(  $_POST['iden'],
    							$_POST['nombre'],
                               	$_POST['apellido'],
                               	$_POST['fnato'],
                               	$_POST['celulcar'],
                               	$_POST['ciudad'],
                               	$_POST['direccion']
            );
?>
