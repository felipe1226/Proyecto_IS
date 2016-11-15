<?php

require_once("../../Modelos/Proyectos/mComunidad.php");
$comunidad = new Comunidad();

    $comunidad->eliminar_Comunidad(  $_POST['codigo']);
?>
