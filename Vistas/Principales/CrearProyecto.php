<?php 
	
 ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
   <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/font-awesome.min.css" rel="stylesheet">
    <link href="../../css/prettyPhoto.css" rel="stylesheet">
    <link href="../../css/price-range.css" rel="stylesheet">
    <link href="../../css/animate.css" rel="stylesheet">
	<link href="../../css/main.css" rel="stylesheet">
	<link href="../../css/responsive.css" rel="stylesheet">
	<link href="../../css/js.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="../../images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../../images/ico/apple-touch-icon-57-precomposed.png">

     <script src="../../Scripts/Proyectos/Validar.js"> </script>

<body>
	<form id ="crearProyecto" method="POST" action="/Proyecto_IS/Controladores/Proyectos/cProyecto.php">
	<section id="cart_items">
		<div class="container">
		
			<div class="table-responsive cart_info">
				
				
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td colspan="4"><center>Datos de proyecto</center></td>
						</tr>
					</thead>
					<tbody>

						
						<tr>
							<td>Codigo:</td><td><input name="codigo"  id = "codigo" type="text" placeholder="Codigo" /></td>
							<td>Tiempo:</td><td><input name="tiempo"  id = "tiempo" type="text" placeholder="Tiempo" /></td>
							
						</tr>
						<tr>
							<td>Titulo:</td><td><input name="titulo"  id = "titulo" type="text" placeholder="Titulo" /></td>
							<td>Profesional responsable:</td>
							<td>
								<select>
									<option>Doctor</option>
									<option>Ingeniero</option>
									<option>Colombia</option>
								</select>
							</td>
							
						</tr>
						<tr>
							<td>Descripcion:</td><td><input name="descripcion"  id = "descripcion" type="text" placeholder="Descripcion" /></td>
							<td class="cart_menu" colspan="2"><center>Tema</center></td>
							
						</tr>
						<tr>
							<td>Alcance:</td><td><input name="alcance"  id = "alcance" type="text" placeholder="Alcance" /></td>
							<td>Codigo:</td><td><input name="codigo_tema"  id = "codigo_tema" type="text" placeholder="Codigo" /></td>
							
						</tr>
						<tr>
							<td>Fecha de inicio</td><td><input name="fecha_inicio"  id = "fecha_inicio" type="text" placeholder="AAAA/MM/DD" /></td>
							<td>Descripcion:</td><td><input name="descripcion_tema"  id = "descripcion_tema" type="text" placeholder="Descripcion" /></td>
							
						</tr>
						<tr>
							<td>Fecha de finalizacion</td><td><input name="fecha_final"  id = "fecha_final" type="text" placeholder="AAAA/MM/DD" /></td>
							<td class="cart_menu" colspan="2"><center>Objetivo</center></td>
							
						</tr>
						<tr>
							<td>Responsable</td>
							<td>
								<select>
									<option>Doctor</option>
									<option>Ingeniero</option>
									<option>Colombia</option>
								</select>
							</td>
							<td>Codigo:</td><td><input name="codigo_objetivo"  id = "codigo_objetivo" type="text" placeholder="Codigo" /></td>
							
						</tr>
						<tr>
							<td>Presupuesto</td><td><input name="presupuesto"  id = "presupuesto" type="text" placeholder="$" /></td>
							<td>Descripcion</td><td><input name="descripcion_objetivo"  id = "descripcion_objetivo" type="text" placeholder="Descripcion" /></td>
							
						</tr>
						<tr>
							<td>Tarea:</td><td><input name="tarea"  id = "tarea" type="text" placeholder="Tarea" /></td>
							<td>Clasificacion</td>
							<td>
								<ul class="user_info">
									<li class="single_field">
										<select>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
										</select>
										<label>*Del 1 al 10</label>
									</li>
								</ul>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section>

	<section id="cart_items">
		<div class="container">
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td colspan="4"><center>Registro de comunidad</center></td>
						</tr>
					</thead>
					<tbody>

						
						<tr>
							<td class="cart_menu" colspan="2"><center>Comunidad</center></td>
							<td class="cart_menu" colspan="2"><center>Representante</center></td>
						</tr>
						<tr>
							<td>Codigo:</td><td><input name="codigo_comunidad"  id = "codigo_comunidad" type="text" placeholder="Codigo" /></td>
							<td>ID:</td><td><input name="id_representante"  id = "id_representante" type="text" placeholder="ID" /></td>
							
						</tr>
						<tr>
							<td>Etnia:</td><td><input name="etnia"  id = "etnia" type="text" placeholder="Etnia" /></td>
							<td>Nombre:</td><td><input name="nombre_representante"  id = "nombre_representante" type="text" placeholder="Nombre" /></td>
							
						</tr>
						<tr>
							<td>Nombre:</td><td><input name="nombre_comunidad"  id = "nombre_comunidad" type="text" placeholder="Nombre" /></td>
							<td>Apellido:</td><td><input name="apellido_representante"  id = "apellido_representante" type="text" placeholder="Apellido" /></td>
							
						</tr>
						<tr>
							<td>Poblacion:<br>*N. de niños</td>
							<td><input name="poblacion"  id = "poblacion" type="text" placeholder="Poblacion" /></td>
							<td>Fecha de nacimiento:</td><td><input name="nac_representante"  id = "nac_representante" type="text" placeholder="AAAA/MM/DD" /></td>
							
						</tr>
						<tr>
							<td class="cart_menu" colspan="2"><center>Infante</center></td>
							<td>Celular:</td><td><input name="cel_representante"  id = "cel_representante" type="text" placeholder="Celular" /></td>
							
						</tr>
						<tr>
							<td>ID:</td><td><input name="id_infante"  id = "id_infante" type="text" placeholder="ID" /></td>
							<td>Ciudad:</td><td><input name="ciudad_representante"  id = "ciudad_representante" type="text" placeholder="Ciudad" /></td>
							
						</tr>
						<tr>
							<td>Nombre</td><td><input name="nombre_infante"  id = "nombre_infante" type="text" placeholder="Nombre" /></td>
							<td>Direccion:</td><td><input name="dir_representante"  id = "dir_representante" type="text" placeholder="Direccion" /></td>
							
						</tr>
						<tr>
							<td>Apellido</td><td><input name="apellido_infante"  id = "apellido_infante" type="text" placeholder="Apellido" /></td>
							<td colspan="2"></td>
							
						</tr>
						<tr>
							<td>Fecha de nacimiento:</td><td><input name="nac_infante"  id = "fecha_nac" type="text" placeholder="AAAA/MM/DD" /></td>
							<td colspan="2"></td>
						</tr>
					</tbody>
				</table><br>
					<button id="boton" type="button" class="btn btn-default" onclick="validacion()">Crear Proyecto</button>
				
				
			</div>
			</form>
		</div>
	</section>
	</form>
  <script src="../../js/jquery.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/jquery.scrollUp.min.js"></script>
	<script src="../../js/price-range.js"></script>
    <script src="../../js/jquery.prettyPhoto.js"></script>
    <script src="../../js/main.js"></script>
</body>
</html>