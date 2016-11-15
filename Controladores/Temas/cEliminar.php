<?php

require_once("../../Modelos/Proyectos/mTemas.php");
$tema = new Tema();

    $tema->eliminar_Tema(  $_POST['codigo']);
?>
