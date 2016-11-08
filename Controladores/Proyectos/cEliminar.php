<?php

require_once("../../Modelos/Proyectos/mProyectos.php");

$proyecto = new Proyecto();


    $proyecto->eliminar_Proyecto(  $_POST['codigo']
            );
?>
