<?php

require_once("../../Modelos/Trabajadores/mTrabajadores.php");

$trabajador = new Trabajador();


    $trabajador->Registrar_Trabajador( $_POST['id'],
                               	$_POST['nombre'], 
                               	$_POST['apellido'],
                               	$_POST['telefono'],
                               	$_POST['salario'],
                               	$_POST['fecha_nac']
            );


   	if (isset($_POST['profesional']) ){
      	$trabajador->Registrar_Profesional( $_POST['id'],
                               				$_POST['select1']
            );
   	}
   	else{
   		 $trabajador->Registrar_Administrativa( $_POST['id'],
                               					$_POST['select2']
            );
   	}
     

?>
