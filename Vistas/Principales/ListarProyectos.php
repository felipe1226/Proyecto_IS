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
			
					if($_POST['tbusqueda']=="todo"){
						if($consulta = $proyecto->listar_proyecto()){
						$cantidad = pg_num_rows($consulta);
						if($cantidad>0){
							echo '<table class="table table-condensed">
							<thead>
							<tr class=cart_menu><td class="image" colspan="11"><center><p2>LISTA DE PROYECTOS</p2></center></td>
							</tr>
							<tr class="cart_menu">
								<td class="image">CODIGO</td>
								<td class="description">TITULO</td>
								<td class="description">DESCRIPCION</td>
								<td class="description">ALCANCE</td>
								<td class="description">PRESUPUESTO</td>
								<td class="description">FECHA INICIO</td>
								<td class="description">FECHA FINALIZACION</td>
								<td class="description">RESPONSABLE</td>
								<td class="description">COMUNIDAD</td>
								<td class="description">TEMA</td>
								<td class="description"></td>
							</tr>
							</thead>
							<tbody>';
							for($i=0;$i< $cantidad; $i++){
			                    $campos = $proyecto->datos();
			                    echo '
				                <tr>
					                <td class="cart_description">'.$campos[0].'</td>

									<td class="cart_description">'.$campos[1].'</td>

									<td class="cart_description2>'.$campos[2].'</td>

									<td class="cart_description">'.$campos[3].'</td>

									<td class="cart_description">'.$campos[4].'</td>

									<td class="cart_description">'.$campos[5].'</td>
																	
									<td class="cart_description">'.$campos[6].'</td>
																	
									<td class="cart_description">'.$campos[7].'</td>

									<td class="cart_description">'.$campos[8].'</td>
																	
									<td class="cart_description">'.$campos[9].'</td>
									<td class="cart_delete">
										<a class="cart_quantity_delete" id="'.$campos[0].'"" onclick="actualizarProy(this.id)"><i class="fa fa-bookmark-o" title="Actualizar proyecto"></i></a>
										<form name="actualizar" id="actualizar"'.$campos[0].'" method="POST" action="ActualizarProyecto.php">
											<input name="consulta" id="consulta" type="hidden" value="'.$campos[0].'/>
										</form>
									</td>
								</tr>';
							}
							echo '
							</tbody>
						</table>';
						}
						else{
							echo '
											<td class="cart_description" align="center">

											<h3><p align="center">¡No se encontraron proyectos en la base de datos!</p></h3>
											<div class="signup-form"><!--sign up form-->
												<form name="regresar" id="regresar" method="POST" action="ListadoProyectos.php">
													<p align="center"><button id="boton" type="submit" class="btn btn-default" ">Regresar</button>
												</form>
											</div>
										</td>';

						}
					}
					}
					else{
						if($_POST['opcion']=="Comunidad"){

							if($consulta=$proyecto->listarxcomunidadproyecto($_POST['consulta'])){
								$cantidad = pg_num_rows($consulta);

								if($cantidad>0){
									echo '<table class="table table-condensed">
									<thead>
									<tr class=cart_menu><td class="image" colspan="9"><center><p2>LISTA DE PROYECTOS POR COMUNIDAD</p2></center></td>
									</tr>
									<tr class="cart_menu">

										<td class="image">CODIGO</td>
										<td class="description">TITULO</td>
										<td class="description">DESCRIPCION</td>
										<td class="description">ALCANCE</td>
										<td class="description">PRESUPUESTO</td>
										<td class="description">FECHA INICIO</td>
										<td class="description">FECHA FINALIZACION</td>
										<td class="description">RESPONSABLE</td>
										<td class="description"></td>
									</tr>
									</thead>
									<tbody>';
										for($i=0;$i< $cantidad; $i++){
				                        	$campos = $proyecto->datos();
				                        	echo "<tr>
				                        		<td class='cart_description'>".$campos[0]."</td>

												<td class='cart_description'>".$campos[1]."</td>

												<td class='cart_description'>".$campos[2]."</td>

												<td class='cart_description'>".$campos[3]."</td>

												<td class='cart_description'>".$campos[4]."</td>

												<td class='cart_description'>".$campos[5]."</td>
																
												<td class='cart_description'>".$campos[6]."</td>
																
												<td class='cart_description'>".$campos[7]."</td>

																
												<td class='cart_delete'>
													<a class='cart_quantity_delete' id='".$campos[0]."' onclick='actualizarProy(this.id)'><i class='fa fa-bookmark-o' title='Actualizar proyecto'></i></a>
													<form name='actualizar' id='actualizar".$campos[0]."' method='POST' action='ActualizarProyecto.php'>
															<input name='consulta' id='consulta' type='hidden' value='".$campos[0]."'/>
													</form>
												</td>
											</tr>";
										}
										echo "</tbody>
										</table>";		
								}
								else{
									echo '
											<td class="cart_description" align="center">

											<h3><p align="center">¡No se encontraron proyectos con codigo de comunidad '.$_POST['consulta'].'!</p></h3>
											<div class="signup-form"><!--sign up form-->
												<form name="regresar" id="regresar" method="POST" action="ListadoProyectos.php">
													<p align="center"><button id="boton" type="submit" class="btn btn-default" ">Regresar</button>
												</form>
											</div>
										</td>';

								}	
							}			
						}
						if($_POST['opcion']=="Responsable"){
							if($consulta = $proyecto->proyectoxresponsable($_POST['consulta'])){
								$cantidad = pg_num_rows($consulta);
								if($cantidad>0){
									echo '<table class="table table-condensed">
									<thead>
									<tr class=cart_menu><td class="image" colspan="4"><center><p2>LISTA DE PROYECTOS POR RESPONSABLE</p2></center></td>
									</tr>
									<tr class="cart_menu">

										<td class="image">CODIGO</td>
										<td class="description">TITULO</td>
										<td class="description">DESCRIPCION</td>
										<td class="description"></td>
									</tr>
									</thead>
									<tbody>';
										for($i=0;$i< $cantidad; $i++){
				                        	$campos = $proyecto->datos();
				                        	echo "<tr>
				                        		<td class='cart_description'>".$campos[0]."</td>

												<td class='cart_description'>".$campos[1]."</td>

												<td class='cart_description'>".$campos[2]."</td>

																
												<td class='cart_delete'>
													<a class='cart_quantity_delete' id='".$campos[0]."' onclick='actualizarProy(this.id)'><i class='fa fa-bookmark-o' title='Actualizar proyecto'></i></a>
													<form name='actualizar' id='actualizar".$campos[0]."' method='POST' action='ActualizarProyecto.php'>
															<input name='consulta' id='consulta' type='hidden' value='".$campos[0]."'/>
													</form>
												</td>
											</tr>";
										}
										echo "</tbody>
										</table>";		
								}
								else{
									echo '
											<td class="cart_description" align="center">

											<h3><p align="center">¡No se encontraron proyectos con responsables con identificacion '.$_POST['consulta'].'!</p></h3>
											<div class="signup-form"><!--sign up form-->
												<form name="regresar" id="regresar" method="POST" action="ListadoProyectos.php">
													<p align="center"><button id="boton" type="submit" class="btn btn-default" ">Regresar</button>
												</form>
											</div>
										</td>';

								}
							}
						}
						if($_POST['opcion']=="Fecha"){
							$consulta = $proyecto->listarxfecha($_POST['consulta']);
							$cantidad = pg_num_rows($consulta);
							if($cantidad>0){
								echo '<table class="table table-condensed">
								<thead>
								<tr class=cart_menu><td class="image" colspan="4"><center><p2>LISTA DE PROYECTOS POR FECHA</p2></center></td>
								</tr>
								<tr class="cart_menu">

									<td class="image">CODIGO</td>
									<td class="description">TITULO</td>
									<td class="description">DESCRIPCION</td>
									<td class="description"></td>
								</tr>
								</thead>
								<tbody>';
									for($i=0;$i< $cantidad; $i++){
			                        	$campos = $proyecto->datos();
			                        	echo "<tr>
			                        		<td class='cart_description'>".$campos[0]."</td>
											<td class='cart_description'>".$campos[1]."</td>
											<td class='cart_description'>".$campos[2]."</td>

															
											<td class='cart_delete'>
												<a class='cart_quantity_delete' id='".$campos[0]."' onclick='actualizarProy(this.id)'><i class='fa fa-bookmark-o' title='Actualizar proyecto'></i></a>
												<form name='actualizar' id='actualizar".$campos[0]."' method='POST' action='ActualizarProyecto.php'>
														<input name='consulta' id='consulta' type='hidden' value='".$campos[0]."'/>
												</form>
											</td>
										</tr>";
									}
									echo "</tbody>
									</table>";		
							}
							else{
								echo '
											<td class="cart_description" align="center">

											<h3><p align="center">¡No se encontraron proyectos en la fecha '.$_POST['consulta'].'!</p></h3>
											<div class="signup-form"><!--sign up form-->
												<form name="regresar" id="regresar" method="POST" action="ListadoProyectos.php">
													<p align="center"><button id="boton" type="submit" class="btn btn-default" ">Regresar</button>
												</form>
											</div>
										</td>';

							}
						}
						if($_POST['opcion']=="Valor inferior a"){
							$consulta = $proyecto->proyectoxevaluacioninferior($_POST['consulta']);
							$cantidad = pg_num_rows($consulta);
							if($cantidad>0){
								echo '<table class="table table-condensed">
								<thead>
								<tr class=cart_menu><td class="image" colspan="5"><center><p2>PROYECTOS CON VALOR INFERIOR A '.$_POST['consulta'].'</p2></center></td>
								</tr>
								<tr class="cart_menu">

									<td class="image">CODIGO</td>
									<td class="description">TITULO</td>
									<td class="description">DESCRIPCION</td>
									<td class="description">VALOR</td>
									<td class="description"></td>
								</tr>
								</thead>
								<tbody>';
									for($i=0;$i< $cantidad; $i++){
			                        	$campos = $proyecto->datos();
			                        	echo "<tr>
			                        		<td class='cart_description'>".$campos[0]."</td>
											<td class='cart_description'>".$campos[1]."</td>
											<td class='cart_description'>".$campos[2]."</td>
											<td class='cart_description'>".$campos[2]."</td>

															
											<td class='cart_delete'>
												<a class='cart_quantity_delete' id='".$campos[0]."' onclick='actualizarProy(this.id)'><i class='fa fa-bookmark-o' title='Actualizar proyecto'></i></a>
												<form name='actualizar' id='actualizar".$campos[0]."' method='POST' action='ActualizarProyecto.php'>
														<input name='consulta' id='consulta' type='hidden' value='".$campos[0]."'/>
												</form>
											</td>
										</tr>";
									}
									echo "</tbody>
									</table>";		
							}
							else{
								echo '
											<td class="cart_description" align="center">

											<h3><p align="center">¡No se encontraron proyectos con valor inferior a '.$_POST['consulta'].'!</p></h3>
											<div class="signup-form"><!--sign up form-->
												<form name="regresar" id="regresar" method="POST" action="ListadoProyectos.php">
													<p align="center"><button id="boton" type="submit" class="btn btn-default" ">Regresar</button>
												</form>
											</div>
										</td>';

							}
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
</body>
</html>