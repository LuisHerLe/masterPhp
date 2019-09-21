<!DOCTYPE html>
<html>
<head>
	<title>Ejercicios de Arrays</title>
</head>
<body>
	<?php
		/*
			Ejercicio 2: Escribir un programa con PHP que añada valores a un array mientras que su longitd sea menor a 120 y luego mostrarlo por pantalla.

		*/
			//Función comidas para recorrer un array enviado como parámetro

			$array = array();
			for ($i=0; $i <120 ; $i++) { 
				array_push($array, rand(1,500));
			}
		var_dump($array);
		

	?>
</body>
</html>