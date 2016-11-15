<?php 
	require_once("../../Modelos/Proyectos/mObjetivo.php");
	$objetivo = new Objetivo();
 ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Objetivos | Fundacion Pro Niñez</title>
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
						if($consulta=$objetivo->consultar_objetivo($_POST['consulta'])){
                            $cantidad = pg_num_rows($consulta);
                                if($cantidad>0){
                                	$info = $objetivo->datos();
			 							 echo '<div class="signup-form"><!--sign up form-->
			 							 		<form id ="actualizarObjetivo" method="POST" action="/Proyecto_IS/Controladores/Objetivos/cActualizar.php">
												<table class="table table-condensed">
													<thead>
														<tr class="cart_menu">
															<td colspan="4"><center>DATOS DE Objetivos</center></td>
														</tr>
													</thead>
													<tbody>
													 <input name="codigo"  id = "codigo" type="hidden" value="'.$info[0].'" />
							                         <tr>
														<td>Descripcion:</td><td><input name="descripcion"  id = "descripcion" type="text" value="'.$info[1].'" /></td>
							                         </tr>
							                         <tr>
														<td>Valor:</td><td><input name="valor"  id = "valor" type="text" value="'.$info[2].'" /></td>
							                         </tr>
							                         <tr>
														<td>codigo de proyecto:</td><td><input disabled name="coproyecto"  id = "coproyecto" type="text" value="'.$info[3].'" /></td>
							                         </tr>
							                         


													</tbody>
												</table>
												<a class="btn btn-default update" onclick="validar_actualizacion()">Actualizar datos</a>
			

												</form>
												
												<form name="eliminarObjetivo" id="eliminarObjetivo" method="POST" action="../../Controladores/Objetivos/cEliminar.php">
													<input name="codigo" id = "codigo" type="hidden" value="'.$info[0].'"/>
													<a class="btn btn-default update" onclick="eliminar()">Eliminar objetivo</a>
												</form>
												</div>';
				                }
				                else{
									echo '
											<td class="cart_description" align="center">

											<h3><p align="center">¡El objetivo con codigo '.$_POST['consulta'].' no se encuentra registrado!</p></h3>
											<div class="signup-form"><!--sign up form-->
												<form name="regresar" id="regresar" method="POST" action="consultarObjetivo.php">
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