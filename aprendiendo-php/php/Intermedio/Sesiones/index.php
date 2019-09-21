<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sesiones</title>
</head>
<body>

	<?php
	/*
		Sesiones
	*/ 
		//Iniciar sesión
		session_start();

		//Variable local
		$libro = "Los nacidos de la Bruma"; //Variable normal

		//Variable de sesión
		$_SESSION['autor'] = 'Brandon Sanderson'; //Una sesion es una variable super global

		echo "$libro <br/>";
		echo $_SESSION['autor'];

	?>
	<hr/>
	<a href="pagina1.php">Ir a Página1</a>
	<hr/>
	<a href="logout.php">Cerrar Sesión</a>
</body>
</html>