<?php

require_once("../../Modelos/Proyectos/mTemas.php");

$tema = new Tema();


    $tema->actualizar_tema(  $_POST['codigo'],
    							$_POST['descripcion']
            );
?>
