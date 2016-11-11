<?php

require_once("../../Modelos/Trabajadores/mTrabajadores.php");

$trabajador = new Trabajador();


    $trabajador->eliminar_trabajador( $_POST['identificacion']
            );

    if($_POST['trab']=="Profesional"){
    	$trabajador->eliminar_profesional( $_POST['identificacion']
            );
    }
    else{
    	$trabajador->eliminar_administrativo( $_POST['identificacion']
            );

    }
?>
