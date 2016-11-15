<?php 
	require_once("../../Modelos/Proyectos/mRepresentante.php");
	$representante = new Representante();
 ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Representantes | Fundacion Pro Niñez</title>
   <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/font-awesome.min.css" rel="stylesheet">
    <link href="../../css/prettyPhoto.css" rel="stylesheet">
    <link href="../../css/price-range.css" rel="stylesheet">
    <link href="../../css/animate.css" rel="stylesheet">
	<link href="../../css/main.css" rel="stylesheet">
	<link href="../../css/responsive.css" rel="stylesheet">
	<link href="../../css/js.css" rel="stylesheet">

	<script src="../../Scripts/Infantes/validar.js"> </script>

<body>
	<section id="cart_items">
		<div class="container">
			<div class="table-responsive cart_info">
			<?php
						if($consulta=$representante->consultar_representante($_POST['consulta'])){
                            $cantidad = pg_num_rows($consulta);
                                if($cantidad>0){
                                	$info = $representante->datos();
			 							 echo '<div class="signup-form"><!--sign up form-->
			 							 		<form id ="actualizarRepresentante" method="POST" action="/Proyecto_IS/Controladores/Representante/cActualizar.php">
												<table class="table table-condensed">
													<thead>
														<tr class="cart_menu">
															<td colspan="4"><center>DATOS DEL REPRESENTANTE</center></td>
														</tr>
													</thead>
													<tbody>
													 <input name="iden"  id = "iden" type="hidden" value="'.$info[0].'" />
							                         <tr>
														<td>Nombre:</td><td><input name="nombre"  id = "nombre" type="text" value="'.$info[1].'" /></td>
							                         </tr>
														<td>Apellido:</td><td><input name="apellido"  id = "apellido" type="text" value="'.$info[2].'"/></td>
													</tr>
													 <tr>
														<td>Fecha de nacimiento:</td><td><input name="fnato"  id = "fnato" type="text" value="'.$info[3].'"/></td>
							                         </tr>
													<tr>
														<td>Celular :</td><td><input name="celular"  id ="celular" type="text"  value="'.$info[4].'"/></td>
													</tr>
													<tr>
														<td>Ciudad :</td><td><input name="ciudad"  id ="ciudad" type="text"  value="'.$info[5].'"/></td>
													</tr>
													<tr>
														<td>Direccion :</td><td><input name="direccion"  id ="direccion" type="text"  value="'.$info[6].'"/></td>
													</tr>

													</tbody>
												</table>
												<a class="btn btn-default update" onclick="validar_actualizacion()">Actualizar datos</a>
			

												</form>
												
												<form name="eliminarRepresentante" id="eliminarRepresentante" method="POST" action="../../Controladores/Representante/cEliminar.php">
													<input name="ide" id = "ide" type="hidden" value="'.$info[0].'"/>
													<a class="btn btn-default update" onclick="eliminar()">Eliminar representante</a>
												</form>
												</div>';
				                }
				                else{
									echo '
											<td class="cart_description" align="center">

											<h3><p align="center">¡El representante con identificacion '.$_POST['consulta'].' no se encuentra registrado!</p></h3>
											<div class="signup-form"><!--sign up form-->
												<form name="regresar" id="regresar" method="POST" action="consultarRepresentante.php">
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