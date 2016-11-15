<?php

require_once("../../Modelos/Proyectos/mObjetivo.php");
$objetivo = new Objetivo();

    $objetivo->eliminar_objetivo(  $_POST['codigo']);
?>