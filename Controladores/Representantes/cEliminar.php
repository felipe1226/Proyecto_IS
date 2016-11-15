<?php

require_once("../../Modelos/Proyectos/mRepresentante.php");
$representante = new Representante();

    $representante->eliminar_representante(  $_POST['ide']);
?>
