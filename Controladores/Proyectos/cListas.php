<?php

    if($_POST['opcion']=="Comunidad"){
		   echo '<script type="text/javascript">'
		        . 'document.location.href = "/Proyecto_IS/Vistas/Principales/listarxComunidadProyecto.php","principal";'
		        . '</script>';
	}
	if($_POST['opcion']=="Responsable"){
		   echo '<script type="text/javascript">'
		        . 'document.location.href = "/Proyecto_IS/Vistas/Principales/proyectoxresponsable.php","principal";'
		        . '</script>';
	}
	if($_POST['opcion']=="Fecha"){
		   echo '<script type="text/javascript">'
		        . 'document.location.href = "/Proyecto_IS/Vistas/Principales/listarxfecha.php","principal";'
		        . '</script>';
	}
	if($_POST['opcion']=="Valor inferior a"){
		   echo '<script type="text/javascript">'
		        . 'document.location.href = "/Proyecto_IS/Vistas/Principales/proyectoxevaluacioninferior.php","principal";'
		        . '</script>';
	}
?>