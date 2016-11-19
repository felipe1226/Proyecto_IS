<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="refresh" content="600" url="../Front/front.php"> 
    <title>Trabajadores | Fundacion Pro Niñez</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/font-awesome.min.css" rel="stylesheet">
    <link href="../../css/prettyPhoto.css" rel="stylesheet">
    <link href="../../css/price-range.css" rel="stylesheet">
    <link href="../../css/animate.css" rel="stylesheet">
	<link href="../../css/main.css" rel="stylesheet">
	<link href="../../css/responsive.css" rel="stylesheet">
	<link href="../../css/js.css" rel="stylesheet">
    
    <link rel="shortcut icon" href="../../images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../../images/ico/apple-touch-icon-57-precomposed.png">

    <script src="../../Scripts/Trabajadores/validar.js"> </script>
					
</head><!--/head-->
	<section id="cart_items">
		<div class="container">
			<div class="item active">
            <div class="signup-form"><!--sign up form-->
				<form id ="consultarTrabajador" method="POST" action="/Proyecto_IS/Vistas/Principales/profesionalesxespecializacion.php">
					<h1><span>C</span>onsultar <span>P</span>rofesional</h1>
                    <input type="radio" name="consulta" id="consulta" value="profesional" />Profesional
                    <input type="radio" name="consulta" id="consulta" value="administrativa" />Area administrativa

                    <br><button id="boton" type="button" class="btn btn-default" onclick="verificar()">Listar profesionales</button>
				</form>
            </div>
			</div>		
		</div>
	</section>
	
	<script src="../../js/jquery.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/jquery.prettyPhoto.js"></script>
    <script src="../../js/main.js"></script>
</body>
</html>