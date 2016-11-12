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
    <title>Listar Trabajadores | Fundacion Pro Niñez</title>
   <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/font-awesome.min.css" rel="stylesheet">
    <link href="../../css/prettyPhoto.css" rel="stylesheet">
    <link href="../../css/price-range.css" rel="stylesheet">
    <link href="../../css/animate.css" rel="stylesheet">
	<link href="../../css/main.css" rel="stylesheet">
	<link href="../../css/responsive.css" rel="stylesheet">
	<link href="../../css/js.css" rel="stylesheet">

	

<body>
	<section id="cart_items">
		<div class="container">
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">ID</td>
							<td class="description">NOMBRE</td>
							<td class="price">APELLIDO</td>
							<td class="quantity">TELEFONO</td>
							<td class="total">FECHA NACIMIENTO</td>
							<td class="price">FECHA SALARIO</td>
							<td class="total">TIPO</td>
							<td class="total">CARGO</td>
							<td></td>
						</tr>
					</thead>
					<tbody>

						<?php 
							if($consulta = $trabajador->listar_trabajador()){
								
                                 $cantidad = pg_num_rows($consulta);

                                 for($i=0;$i< $cantidad; $i++){
                                 	$campos = $trabajador->datos();
                                 	$tipot=$trabajador->consultar_profesional($campos[0]);
                                    		$cant = pg_num_rows($tipot);
											if($cant>0){
	                                			$tipo = $trabajador->datos();
	                                			$trab = "Profesional";
	                                		}
	                                		else{
	                                			$tipot=$trabajador->consultar_administrativo($campos[0]);
	                                			$cant = pg_num_rows($tipot);
	                                			if($cant>0){
	                                				$tipo = $trabajador->datos();
	                                				$trab = "Area administrativa";
	                                			}
	                                		}

                                    

									echo "
									<tr>
										<td class='cart_description'>".$campos[0]."
										</td>
										<td class='cart_description'>".$campos[1]."

												
										</td>
										<td class='cart_description'>".$campos[2]."

												
										</td>
										<td class='cart_description'>".$campos[3]."

												
										</td>
										<td class='cart_description'>".$campos[4]."

												
										</td>
										<td class='cart_description'>".$campos[5]."</td>
										

												
										
										<td class='cart_description'>".$trab."

												
										</td>
										<td class='cart_description'>".$tipo[0]."

												
										</td>
									</tr>";




							/*</tbody>td class='cart_delete'>
								<a class='cart_quantity_delete' id='".$tupla[7]."' onclick='borrarCarrito(this.id)'><i class='fa fa-times'></i></a>
								<form name='borrar' id='borrar".$tupla[7]."' method='POST' action='../../Controladores/Carrito/cBorrarCarrito.php'>
												<input name='id' id = 'id' type='hidden' value='".$tupla[7]."'/>
								</form>
							</td>*/
						
					}

					if($cantidad == 0)
					{
						echo "
								<td class='cart_description' align='center'>
								<p align='center'>¡No hay trabajadores en la base de datos!</p>
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