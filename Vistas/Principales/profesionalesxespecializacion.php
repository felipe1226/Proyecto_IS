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

				<table class="table table-condensed">
					<thead>
						<tr class=cart_menu><td class="image" colspan="4"><center><p2>LISTA DE PROFESIONALES POR ESPECIALIZACION</p2></center></td>
						</tr>
						<tr class="cart_menu">

							<td class="description">NOMBRE</td>
							<td class="description">APELLIDO</td>
							<td class="description">TELEFONO</td>
							<td class="description"></td>
						</tr>
					</thead>
					<tbody>

						<?php 
							if($consulta = $trabajador->profesionalesxespecializacion($_POST['consulta'])){
								
                                 $cantidad = pg_num_rows($consulta);

                                 for($i=0;$i< $cantidad; $i++){
                                 	$campos = $trabajador->datos();
                                    
									echo "
									<tr>
										<td class='cart_description'>".$campos[1]."</td>

										<td class='cart_description'>".$campos[2]."</td>

										<td class='cart_description'>".$campos[3]."</td>

																				
										<td class='cart_delete'>
											<a class='cart_quantity_delete' id='".$campos[0]."' onclick='actualizarTrab(this.id)'><i class='fa fa-bookmark-o' title='Actualizar trabajador'></i></a>
											<form name='actualizar' id='actualizar".$campos[0]."' method='POST' action='ActualizarTrabajador.php'>
													<input name='consulta' id='consulta' type='hidden' value='".$campos[0]."'/>
											</form>
										</td>
										</tr>";
								}

								if($cantidad == 0)
								{
									echo "
											<td class='cart_description' align='center'>
											<p align='center'>¡No hay proyectos en la base de datos!</p>
											</td>
									";
								}

							}
	 					?>
						
					</tbody>
				</table>
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