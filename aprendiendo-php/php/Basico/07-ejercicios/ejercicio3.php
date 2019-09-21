<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 3</title>
</head>
<body>
	<?php
		/*
			Ejercicio 3: Hacer un programa que compruebe si una variable está vacía y si lo está, rellenarla con texto en minúsculas y mostrarlo en mayúsculas y negrita.

		*/
			
		//Inicializar variable
		$variable ="";

		trim($variable);

		if (empty($variable)) {
			
			$variable = "la odisea de homero";

			//Se pasa a mayúsculas;
			$mayus = strtoupper($variable);
			echo "La variable está vacía, se va a rellenar con: <strong>$mayus</strong>";
		}else{
			echo "La variable tiene este contenido: $variable";
		}
		

	?>
</body>
</html>