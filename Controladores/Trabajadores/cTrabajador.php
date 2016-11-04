<?php

require_once("../../Modelos/Trabajadores/mTrabajadores.php");

$trabajador = new Trabajador();


    $trabajador->Registrar_Trabajador(  $_POST['codigo'],
                               	$_POST['titulo'], 
                               	$_POST['descripcion'],
                               	$_POST['alcance']
            );
?>
