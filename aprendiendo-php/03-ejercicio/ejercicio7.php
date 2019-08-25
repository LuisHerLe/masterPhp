<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio7</title>
</head>
<body>

	<?php
		/*
			- Mostrar todos los números entre dos números impares que lleguen por la url get
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

		for ($i=$menor; $i<= $mayor ; $i++) { 			
			$res = $i % 2;
			if ($res!=0) {
				echo "$i";	
				if ($i!=$mayor) {
					echo ", ";
				}			
			}

		}
	}else{
			echo "Favor ingrear bien los números";
		}
	
		
	?>

</body>
</html>