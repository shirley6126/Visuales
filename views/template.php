<html>
	<head>
		<title> CuartoA</title>
		<link rel="stylesheet" href="css/estilo.css">
	  	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">		
		</head>
			<body> 
			<header>
				<img src="images/banner.png" width="80%" height="40%" ></img>
		</header>
		<nav>
			<ul>
                <li><a href="index.php?accion=inicio">Inicio</a></li>
				<li><a href="index.php?accion=nosotros">Nosotros</a></li>
				<li><a href="index.php?accion=servicios">Servicios</a></li>
				<li><a href="index.php?accion=contactanos">Contactanos</a></li>
			</ul>
		</nav>
		<section>
            <?php
                $mvc = new PaginasController();
                $mvc -> enlacesPaginasController();
            ?>
        </section>
		<footer>
			Derechos reservados @CuartoA
		</footer>
		<script type="text/javascript" src="js/operaciones.js"></script>
	</body>
</html>