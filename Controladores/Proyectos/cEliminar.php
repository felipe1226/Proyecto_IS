<?php

require_once("../../Modelos/Proyectos/mProyectos.php");

$proyecto = new Proyecto();


    $proyecto->eliminar_Proyecto(  $_POST['codigo']
            );

     $proyecto->eliminar_Tema(  $_POST['tem']

            );

    $proyecto->eliminar_Objetivo(  $_POST['codigo']

            );
	$proyecto->eliminar_Representante(  $_POST['com']

            );

    $proyecto->eliminar_Comunidad(  $_POST['com']

            );

    
    $proyecto->eliminar_Infante(  $_POST['com']

            );

    $proyecto->eliminar_Participa(  $_POST['codigo']

            );
?>
