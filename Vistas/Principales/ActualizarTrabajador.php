<?php 
	require_once("../../Modelos/Trabajadores/mTrabajadores.php");
	$trabajador = new Trabajador();
 ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Trabajadores | Fundacion Pro Niñez</title>
   <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/font-awesome.min.css" rel="stylesheet">
    <link href="../../css/prettyPhoto.css" rel="stylesheet">
    <link href="../../css/price-range.css" rel="stylesheet">
    <link href="../../css/animate.css" rel="stylesheet">
	<link href="../../css/main.css" rel="stylesheet">
	<link href="../../css/responsive.css" rel="stylesheet">
	<link href="../../css/js.css" rel="stylesheet">

	<script src="../../Scripts/Trabajadores/actualizar.js"> </script>

	
	

	
<body>
	<section id="cart_items">
		<div class="container">
			<div class="table-responsive cart_info">
			<?php
						if($consulta=$trabajador->consultar_trabajador($_POST['consulta'])){
                            $cantidad = pg_num_rows($consulta);
                                if($cantidad>0){
                                	$info = $trabajador->datos();

			 							 echo '<div class="signup-form"><!--sign up form-->
			 							 	<form id ="registrarTrabajador" method="POST" action="/Proyecto_IS/Controladores/Trabajadores/cActualizar.php">
												<table class="table table-condensed">
													<thead>
														<tr class="cart_menu">
															<td colspan="4"><center>Datos de Trabajador</center></td>
														</tr>
													</thead>
													<tbody>
													 <input   name="iden"  id = "iden" type="hidden" value="'.$info[0].'" />
							                         
							                         <tr>
														<td>Nombre:</td><td><input name="nombre"  id = "nombre" type="text" value="'.$info[1].'" /></td>
							                         </tr>
														<td>Apellido:</td><td><input name="apellido"  id = "apellido" type="text" value="'.$info[2].'"/></td>
													</tr>
													 <tr>
														<td>Telefono:</td><td><input name="telefono"  id = "telefono" type="text" value="'.$info[3].'"/></td>
							                         </tr>
													<tr>
														<td>Salario :</td><td><input name="salario"  id ="salario" type="text"  value="'.$info[5].'"/></td>
													</tr>
													<tr>
														<td>Fecha de Nacimiento</td><td><input name="fecha_nac"  id = "fecha_nac" type="text" value="'.$info[4].'" /></td>';

														$tipot=$trabajador->consultar_profesional($_POST['consulta']);
													    $cantidad = pg_num_rows($tipot);
													    if($cantidad>0){
	                                						$tipo = $trabajador->datos();
	                                						$trab = "Profesional";
	                                					}
	                                					else{
	                                						 $tipot=$trabajador->consultar_administrativo($_POST['consulta']);
	                                						 $cantidad = pg_num_rows($tipot);
	                                						 if($cantidad>0){
	                                							$tipo = $trabajador->datos();
	                                							$trab = "Area administrativa";
	                                						}
	                                					}
												    
													echo '<tr>
														<td>Tipo de Trabajador: '.$tipo[0].'"</td><td>'.$trab.'
													</tr>

													</tbody>
												</table>
												<a class="btn btn-default update" onclick="validar_actualizacion()">Actualizar datos</a>
												</form>

												<form name="eliminarTrabajador" id="eliminarTrabajador" method="POST" action="../../Controladores/Trabajadores/cEliminar.php">
													<input name="identificacion" id = "identificacion" type="hidden" value="'.$info[0].'"/>
													<a class="btn btn-default update" onclick="eliminar()">Eliminar trabajador</a>
												</form>
												</div>';
				                }
				                else{
									echo '<td class="cart_description" align="center">

										<h3><p align="center">¡El trabajador con identificacion '.$_POST['consulta'].' no se encuentra registrado!</p></h3>
										<div class="signup-form"><!--sign up form-->
												<form name="regresar" id="regresar" method="POST" action="consultarTrabajador.php">
													<p align="center"><button id="boton" type="submit" class="btn btn-default" ">Regresar</button>
												</form>
										</td>';
								}
				        }
				            
				?>
			</div>
		</div>
	</section>

  	<script src="../../js/jquery.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/jquery.scrollUp.min.js"></script>
	<script src="../../js/price-range.js"></script>
    <script src="../../js/jquery.prettyPhoto.js"></script>
    <script src="../../js/main.js"></script>
    
</script>
</body>
</html>