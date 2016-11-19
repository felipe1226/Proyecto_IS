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
	<script src="../../Scripts/Trabajadores/validar.js"> </script>

	
	

	
<body>
	<section id="cart_items">
		<div class="container">
			<div class="table-responsive cart_info">
			<div class="signup-form"><!--sign up form-->
			  <form id ="registrarTrabajador" method="POST" action="/Proyecto_IS/Controladores/Trabajadores/cTrabajador.php">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td colspan="4"><center>DATOS DE TRABAJADOR</center></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Identificación:</td><td><input name="id"  id = "id" type="text" placeholder="Identificacion" />
                         </tr>
                         <tr>
							<td>Nombre:</td><td><input name="nombre"  id = "nombre" type="text" placeholder="Nombre" />
                         </tr>
							<td>Apellido:</td><td><input name="apellido"  id = "apellido" type="text" placeholder="Apellido" /></td>
						</tr>
						 <tr>
							<td>Telefono:</td><td><input name="telefono"  id = "telefono" type="text" placeholder="Telefono" />
                         </tr>
						<tr>
							<td>Salario :</td>
						  <td><input name="salario"  id ="salario" type="text"  placeholder="$" /></td>
						</tr>
						<tr>
							<td>Fecha de Nacimiento</td><td><input name="fecha_nac"  id = "fecha_nac" type="text" placeholder="AAAA/MM/DD" /></td>
							
						<tr>
							<td>Tipo de Trabajador:</td>
						</tr>
                        <tr>
	                        <td><input type="radio" name="trabajador" id="trabajador" value="profesional" />Profesional</td>
							<td><input type="radio" name="trabajador" id="trabajador" value="administrativa" />Area administrativa
						</tr>
						<tr>
							<td>
								<select name ="select1" id="select1" >
		                            <option>Sicologo</option>
									<option>Medico</option>
									<option>Odontologo</option>
		                            <option>Trabajador social</option>
		                            <option>Pedagogo</option>
                            
						    	</select>
						    </td>
							<td>
								<select name="select2" id="select2">
		                            <option>Secretaria</option>
									<option>Servicio</option>
									<option>general</option>
						    	</select>
						    </td>
						</tr>
					</tbody>
				</table>
				
					<button id="boton" type="button" class="btn btn-default" onclick="validacion()">Registrar trabajador</button>

			</form>
			</div>
		
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