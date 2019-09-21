<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio4</title>
</head>
<body>

	<?php
	 /*
		- Recoger por GET y realizar las operaciones básicas de los dos números
	 */
	

	if (isset($_GET['num1']) && isset($_GET['num2'])) {
		$numero1 = $_GET['num1'];
		$numero2 = $_GET['num2'];
		echo 'Suma: ' . $numero1 . ' + ' . $numero2 . ' = ' . ($numero1 + $numero2) . '<br/>';
		echo 'Resta: ' . $numero1 . ' - ' . $numero2 . ' = ' . ($numero1 - $numero2) . '<br/>';
		echo 'Multiplicación: ' . $numero1 . ' * ' . $numero2 . ' = ' . ($numero1 * $numero2) . '<br/>';
		echo 'División: ' . $numero1 . ' / ' . $numero2 . ' = ' . ($numero1 / $numero2) . '<br/>';	
	}else {
		echo "Por favor ingresar correctamente los números";
	}
	

	?>

</body>
</html>