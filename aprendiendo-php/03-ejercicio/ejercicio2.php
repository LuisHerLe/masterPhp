<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio2</title>
</head>
<body>

	<?php
		/*
			- Imprimir en php todos los números pares del 1 al 100
		*/

		$valPar= 2;
		$resto= 0;
		$validar= 0;
		//echo 'Resto: '. ($numero1 % $numero2).'<br/>';

		for ($i=1; $i <= 100 ; $i++) { 
			//Sacar el resto del número
			$validar = $i % $valPar;
			//Validar si es par
			if ($validar == $resto) {
				echo "El número <strong>$i</strong> es un número <strong><i>par</i></strong><br/>";
			}
		}

	?>

</body>
</html>