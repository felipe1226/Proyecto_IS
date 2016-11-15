<?php

require_once("../../Modelos/Proyectos/mObjetivo.php");

$objetivo = new objetivo();


    $objetivo->actualizar_objetivos(  $_POST['codigo'],
    							$_POST['descripcion'],
    							$_POST['valor']
            );
?>
