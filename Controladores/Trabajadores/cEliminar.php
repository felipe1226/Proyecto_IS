<?php

require_once("../../Modelos/Trabajadores/mTrabajadores.php");

$trabajador = new Trabajador();


    $trabajador->eliminar_trabajador( $_POST['identificacion']
            );
?>
