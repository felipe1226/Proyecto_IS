<?php

require_once("../../Modelos/Trabajadores/mTrabajadores.php");

$trabajador = new Trabajador();


    $trabajador->actualizar_trabajador(  $_POST['iden'],
    							$_POST['nombre'],
                               	$_POST['apellido'], 
                               	$_POST['telefono'],
                               	$_POST['fecha_nac'],
                               	$_POST['salario']
            );
?>
