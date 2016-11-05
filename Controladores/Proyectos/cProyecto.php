<?php

require_once("../../Modelos/Proyectos/mProyectos.php");

$proyecto = new Proyecto();


    $proyecto->Registrar_Proyecto(  $_POST['codigo'],
                               	$_POST['titulo'], 
                               	$_POST['descripcion'],
                               	$_POST['alcance'],
                               	$_POST['presupuesto'],
                               	$_POST['fecha_inicio'],
                               	$_POST['fecha_final'],
                               	$_POST['responsable'],
                               	$_POST['codigo_comunidad'],
                               	$_POST['codigo_tema']

            );

    $proyecto->Registrar_Tema(  $_POST['codigo_tema'],
                               	$_POST['descripcion_tema']

            );

    $proyecto->Registrar_Objetivo(  $_POST['codigo_objetivo'],
                               	$_POST['descripcion_objetivo'], 
                               	$_POST['clasificacion'],
                               	$_POST['codigo']

            );

    $proyecto->Registrar_Comunidad(  $_POST['codigo_comunidad'],
                               	$_POST['etnia'], 
                               	$_POST['nombre_comunidad'],
                               	$_POST['poblacion'],
                               	$_POST['id_representante']

            );

    $proyecto->Registrar_Representante(  $_POST['id_representante'],
                               	$_POST['nombre_representante'], 
                               	$_POST['apellido_representante'],
                               	$_POST['nac_representante'],
                               	$_POST['cel_representante'],
                               	$_POST['ciudad_representante'],
                               	$_POST['dir_representante']

            );

    $proyecto->Registrar_Infante(  $_POST['id_infante'],
                               	$_POST['nombre_infante'], 
                               	$_POST['apellido_infante'],
                               	$_POST['nac_infante'],
                               	$_POST['codigo_comunidad']

            );

    $proyecto->Registrar_Participa(  $_POST['codigo'],
                               	$_POST['tiempo'], 
                               	$_POST['tarea'],
                               	$_POST['Profesional']

            );

?>
