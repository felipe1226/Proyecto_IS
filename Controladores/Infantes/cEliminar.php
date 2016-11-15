<?php

require_once("../../Modelos/Proyectos/mInfante.php");
$infante = new Infante();

    $infante->eliminar_Infante(  $_POST['ide']);
?>
