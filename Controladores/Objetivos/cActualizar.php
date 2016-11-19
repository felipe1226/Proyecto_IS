<?php

require_once("../../Modelos/Proyectos/mObjetivo.php");

$objetivo = new Objetivo();


    $objetivo->actualizar_objetivo(  $_POST['codigo'],
    							$_POST['descripcion'],
    							$_POST['valor']
            );
?>
