<?php

require_once("../../Modelos/Proyectos/mProyectos.php");
require_once("../../Modelos/Proyectos/mTema.php");
require_once("../../Modelos/Proyectos/mObjetivo.php");

$proyecto = new Proyecto();
$tema = new Tema();
$objetivo = new Objetivo();

    $proyecto->eliminar_Proyecto(  $_POST['codigo']);

    $tema->eliminar_Tema(  $_POST['tem']);

    $objetivo->eliminar_Objetivo(  $_POST['codigo']);

    $proyecto->eliminar_Participa(  $_POST['codigo']);
?>
