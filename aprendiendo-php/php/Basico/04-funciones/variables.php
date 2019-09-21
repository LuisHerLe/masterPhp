<!DOCTYPE html>
<html>
<head>
	<title>Variables</title>
</head>
<body>

	<?php
		
		/*
			Variables Locales: Son las que se definen dentro de una función y no pueden ser usadas fuera de la misma, sólo están disponibles dentro de ella. A no ser que se haga un return.

			Variables Globales: Son las que se declaran fuera de una función y están disponibles dentro y fuera de la misma.
		*/
			//Variable Global
			$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

			//echo "$frase";

			function holaMundo(){
				global $frase;

				echo "<h1>$frase</h1>";

				$year = 2019;
				echo "<h1>$year</h1>";

				return $year;
			}

			//echo holaMundo();

			//Funciones Variables
			function buenasDias(){
				return "Hola! Buenos días";
			}

			function buenasTardes(){
				return "Ey! Qué tal ha ido la comida?";
			}

			function buenasNoches(){
				return "Buenas noches! Hasta mañana!";
			}

			$horario = $_GET['horario'];
			// echo $horario();
			$miFuncion = "buenas".$horario;
			echo $miFuncion();

			
	?>
	
	

</body>
</html>