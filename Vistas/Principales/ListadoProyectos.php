<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="refresh" content="600" url="../Front/front.php"> 
    <title>Proyectos | Fundacion Pro Niñez</title>
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


    <script src="../../js/jquery-2.1.0.min.js" type="text/javascript"> </script>						
</head><!--/head-->
	<section id="cart_items">
		<div class="container">
			<div class="item active">
                <div class="signup-form"><!--sign up form-->

                    <form id ="listarTodo" method="POST" action="/Proyecto_IS/Vistas/Principales/ListarProyectos.php">
                        <input name="tbusqueda" id="tbusqueda" type="hidden" value="todo"/>
                        <button type="submit" name="listar" id="listar">Listar Todos</button>

                    </form>

    				
    				<h1><span>D</span>ato de <span>C</span>onsulta</h1>
    				<form name="listaOpcion" id="listaOpcion" method="POST" action="/Proyecto_IS/Vistas/Principales/ListarProyectos.php">
                        <input name="tbusqueda" id="tbusqueda" type="hidden" value="opcion"/>
                        <select name="opcion" id="opcion">
                                <option>--opcion--</option>
                                <option>Comunidad</option>
                                <option>Responsable</option>
                                <option>Fecha</option>
                                <option>Valor inferior a</option>
                                                       
                        </select><br>
                        <div class="search_box">
                            <input type="text" name="consulta" id="consulta" placeholder="Ingrese dato"/>
                        </div>
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