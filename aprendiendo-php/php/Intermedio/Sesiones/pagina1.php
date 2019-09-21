<!DOCTYPE html>
<html>
<head>
	<title>Sesiones</title>
</head>
<body>

	<?php
	/*
		Sesiones
	*/ 
		//Iniciar sesión
		session_start();

		echo $_SESSION['autor'];

	?>
</body>
</html>