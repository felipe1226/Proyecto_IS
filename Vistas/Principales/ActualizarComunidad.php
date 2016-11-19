<?php 
	require_once("../../Modelos/Proyectos/mComunidad.php");
	$comunidad = new Comunidad();
 ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Comunidades | Fundacion Pro Niñez</title>
   <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/font-awesome.min.css" rel="stylesheet">
    <link href="../../css/prettyPhoto.css" rel="stylesheet">
    <link href="../../css/price-range.css" rel="stylesheet">
    <link href="../../css/animate.css" rel="stylesheet">
	<link href="../../css/main.css" rel="stylesheet">
	<link href="../../css/responsive.css" rel="stylesheet">
	<link href="../../css/js.css" rel="stylesheet">

	<script src="../../Scripts/Comunidades/validar.js"> </script>

<body>
	<section id="cart_items">
		<div class="container">
			<div class="table-responsive cart_info">
			<?php
						if($consulta=$comunidad->consultar_comunidad($_POST['consulta'])){
                            $cantidad = pg_num_rows($consulta);
                                if($cantidad>0){
                                	$info = $comunidad->datos();
			 							 echo '<div class="signup-form"><!--sign up form-->
			 							 		<form id ="actualizarComunidad" method="POST" action="/Proyecto_IS/Controladores/Comunidades/cActualizar.php">
												<table class="table table-condensed">
													<thead>
														<tr class="cart_menu">
															<td colspan="4"><center>DATOS DE COMUNIDAD</center></td>
														</tr>
													</thead>
													<tbody>
													 <input name="codigo"  id = "codigo" type="hidden" value="'.$info[0].'" />
							                         <tr>
														<td>Etnia:</td><td><input name="etnia"  id = "etnia" type="text" value="'.$info[1].'" /></td>
							                         </tr>
														<td>Nombre:</td><td><input name="nombre"  id = "nombre" type="text" value="'.$info[2].'"/></td>
													</tr>
													 <tr>
														<td>Poblacion:</td><td><input name="poblacion"  id = "poblacion" type="text" value="'.$info[3].'"/></td>
							                         </tr>
													<tr>
														<td>Representante :</td><td><input disabled name="representante"  id ="representante" type="text"  value="'.$info[4].'"/></td>
													</tr>
													

													</tbody>
												</table>
												<a class="btn btn-default update" onclick="validar_actualizacion()">Actualizar datos</a>
			

												</form>
												
												<form name="eliminarComunidad" id="eliminarComunidad" method="POST" action="../../Controladores/Comunidades/cEliminar.php">
													<input name="codigo" id = "codigo" type="hidden" value="'.$info[0].'"/>
													<a class="btn btn-default update" onclick="eliminar()">Eliminar comunidad</a>
												</form>
												</div>';
				                }
				                else{
									echo '
											<td class="cart_description" align="center">

											<h3><p align="center">¡La comunidad con codigo '.$_POST['consulta'].' no se encuentra registrada!</p></h3>
											<div class="signup-form"><!--sign up form-->
												<form name="regresar" id="regresar" method="POST" action="consultarComunidad.php">
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