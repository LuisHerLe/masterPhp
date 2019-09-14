<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 4</title>
</head>
<body>
	<?php
		/*
			Ejercicio 4: Hacer un programa que tenga 4 variables de tipo:
			- Array
			- String
			- int
			- boolean

			Imprimir un mensaje según el tipo que sea

		*/

		//Se inicializan variables
		$array = ['Lista','Lista2'];
		$string = "Texto";
		$int = 1;
		$boolean = true;

		if (is_array($array)) {
			echo "La variable Array es una lista<hr/>";
		}

		if (is_string($string)) {
			echo "$string es un texto<hr/>";
		}

		if (is_int($int)) {
			echo "$int es un número<hr/>";
		}

		if (is_bool($boolean)) {
			echo "$boolean es un Booleano<hr/>";
		}

	?>
</body>
</html>