<!DOCTYPE html>
<html>
<head>
	<title>Sesiones</title>
</head>
<body>
	<?php 
		session_start();
		$libro = "Los nacidos de la Bruma"; //Variable normal

		$_SESSION['autor'] = 'Brandon Sanderson'; //Una sesion es una variable super global
	?>
</body>
</html>