<?php 
	
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
	<script src="../../Scripts/Trabajadores/Validar.js"> </script>

	
<body>
	<section id="cart_items">
		<div class="container">
			<div class="table-responsive cart_info">
			  <form id ="registrarTrabajador" method="POST" action="/Proyecto_IS/Controladores/Trabajadores/cTrabajador.php">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td colspan="4"><center>Datos de Trabajador</center></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Identificación:</td><td><input name="codigo"  id = "codigo" type="text" placeholder="Codigo" />
                         </tr>
                         <tr>
							<td>Nombre:</td><td><input name="titulo"  id = "titulo" type="text" placeholder="Titulo" />
                         </tr>
							<td>Apellido:</td><td><input name="descripcion"  id = "descripcion" type="text" placeholder="Descripcion" /></td>
						</tr>
						<tr>
							<td>Salario :</td>
						  <td><input name="Salario"  id ="Salario" type="text"  placeholder="$" /></td>
						</tr>
						<tr>
							<td>Fecha de Nacimiento</td><td><input name="fecha_inicio"  id = "fecha_inicio" type="text" placeholder="AAAA/MM/DD" /></td>
							
						<tr>
							<td>Tipo de Trabajador</td><td>&nbsp;</td>
						</tr>
                        <tr>
                        <form action="demo_form.asp">
  							<td><input type="checkbox" name="profesional" value="profesional">Profesional <br>&nbsp;</td>
  							<td><input type="checkbox" name="areaadministrativa" value="areaadministrativa" checked>Area Administrativa<br>&nbsp;</td>
						</form>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td><select id="select1">
                            <option>Sicologo</option>
							<option>Medico</option>
							<option>Odontologo</option>
                            <option>Trabajador social</option>
                            <option>Pedagogo</option>
                            <option>Etc</option>
                            
						    </select></td>
							<td><select id="select2">
                            <option>Secretaria</option>
							<option>Servicio</option>
							<option>generale</option>
                            <option>Etc</option>
						    </select></td>
						</tr>
					</tbody>
				</table>
				
					<button id="boton" type="button" class="btn btn-default" onclick="validacion()">Registrar trabajador</button>

			</form>
		
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