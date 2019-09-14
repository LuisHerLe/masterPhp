<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio3</title>
</head>
<body>

	<?php
	
	 /*
		- Imprimir por pantalla los cuadrados de los 40 primeros números naturales	
	$num = 0;
	while ($num <= 40) {
		$cuadrado = $num * $num;
		echo "El cuadrado de $num es <strong><i>$cuadrado</i></strong><br>";
		$num++;
	}

	 */

	for ($i=0; $i <=40 ; $i++) { 
		$cuadrado = $i * $i;
		echo "El cuadrado de $i es <strong><i>$cuadrado</i></strong><br>";
	}

	?>

</body>
</html>