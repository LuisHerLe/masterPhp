<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio5</title>
</head>
<body>

	<?php
		/*
			- Mostrar todos los números entre dos números que lleguen por la url get
		*/

	if (isset($_GET['num1']) && isset($_GET['num2'])) {
		//Inicialización de variables
		$num1 = $_GET['num1'];
		$num2 = $_GET['num2'];

		//Validar el mayor
		if ($num1 > $num2) {
			$mayor = $num1;
			$menor = $num2 + 1;
		}else{
			$mayor = $num2;
			$menor = $num1 + 1;
		}

		//Iterar números
		do {
			echo $menor++;
			if ($menor != $mayor) {
				echo ", ";
			}
		} while ($menor < $mayor);
	}else{
			echo "Favor ingrear bien los números";
		}
	
		
	?>

</body>
</html>