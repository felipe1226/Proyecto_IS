<?php 
	require_once("../../Modelos/Proyectos/mProyectos.php");
	$proyecto = new Proyecto();
 ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Proyectos | Fundacion Pro Niñez</title>
   <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/font-awesome.min.css" rel="stylesheet">
    <link href="../../css/prettyPhoto.css" rel="stylesheet">
    <link href="../../css/price-range.css" rel="stylesheet">
    <link href="../../css/animate.css" rel="stylesheet">
	<link href="../../css/main.css" rel="stylesheet">
	<link href="../../css/responsive.css" rel="stylesheet">
	<link href="../../css/js.css" rel="stylesheet">

	<script src="../../Scripts/Proyectos/actualizar.js"> </script>

<body>
	<section id="cart_items">
		<div class="container">
			<div class="table-responsive cart_info">
			<?php
						if($consulta=$proyecto->consultar_proyecto($_POST['consulta'])){
                            $cantidad = pg_num_rows($consulta);
                                if($cantidad>0){
                                	$info = $proyecto->datos();
			 							 echo '<div class="signup-form"><!--sign up form-->
			 							 		<form id ="registrarProyecto" method="POST" action="/Proyecto_IS/Controladores/Proyectos/cActualizar.php">
												<table class="table table-condensed">
													<thead>
														<tr class="cart_menu">
															<td colspan="4"><center>Datos del proyecto</center></td>
														</tr>
													</thead>
													<tbody>
													 <input name="cod"  id = "cod" type="hidden" value="'.$info[0].'" />
							                         <tr>
														<td>Titulo:</td><td><input name="titulo"  id = "titulo" type="text" value="'.$info[1].'" /></td>
							                         </tr>
														<td>Descripcion:</td><td><input name="descripcion"  id = "descripcion" type="text" value="'.$info[2].'"/></td>
													</tr>
													 <tr>
														<td>Alcance:</td><td><input name="alcance"  id = "alcance" type="text" value="'.$info[3].'"/></td>
							                         </tr>
													<tr>
														<td>Presupuesto :</td><td><input name="presupuesto"  id ="presupuesto" type="text"  value="'.$info[4].'"/></td>
													</tr>
													<tr>
														<td>Fecha de inicio</td><td><input name="fechai"  id = "fechai" type="text" value="'.$info[5].'" /></td>
														
													<tr>
													<tr>
														<td>Fecha de finalizacion</td><td><input name="fechaf"  id = "fechaf" type="text" value="'.$info[6].'" /></td>
													</tr>
													<tr>
														<td>Codigo de responsable</td><td><input name="responsable"  id = "responsable" type="text" value="'.$info[7].'" /></td>
													</tr>
													<tr>
														<td>Codigo de comunidad</td><td><input disabled name="comunidad"  id = "comunidad" type="text" value="'.$info[8].'" /></td>
													</tr>
													<tr>
														<td>Codigo de tema</td><td><input disabled name="tema"  id = "tema" type="text" value="'.$info[9].'" /></td>
													</tr>


													</tbody>
												</table>
												<a class="btn btn-default update" onclick="validar_actualizacion()">Actualizar datos</a>
			

												</form>
												
												<form name="eliminarProyecto" id="eliminarProyecto" method="POST" action="../../Controladores/Proyectos/cEliminar.php">
													<input name="codigo" id = "codigo" type="hidden" value="'.$info[0].'"/>
													<input name="tem" id = "tem" type="hidden" value="'.$info[9].'"/>
													<input name="com" id = "com" type="hidden" value="'.$info[8].'"/>
													<a class="btn btn-default update" onclick="eliminar()">Eliminar proyecto</a>
												</form>
												</div>';
				                }
				                else{
									echo '
											<td class="cart_description" align="center">

											<h3><p align="center">¡El proyecto con codigo '.$_POST['consulta'].' no se encuentra registrado!</p></h3>
											<div class="signup-form"><!--sign up form-->
												<form name="regresar" id="regresar" method="POST" action="consultarProyecto.php">
													<p align="center"><button id="boton" type="submit" class="btn btn-default" ">Regresar</button>
												</form>
											</div>
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