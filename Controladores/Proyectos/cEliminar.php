<?php

require_once("../../Modelos/Productos/mProyectos.php");

$proyecto = new Proyecto();


    $proyecto->eliminar_Proyecto(  $_POST['id']
            );
?>
