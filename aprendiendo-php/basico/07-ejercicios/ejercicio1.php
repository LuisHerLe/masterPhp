<!DOCTYPE html>
<html>
<head>
	<title>Ejercicios de Arrays</title>
</head>
<body>
	<?php
		/*
			Ejercicio 1: Hacer un programa en php que tenga un array con 8 números enteros y que haga:
				-	Recorrerlo y mostrarlo
				-	Ordenarlo y mostrarlo
				-	Mostrar su longitud
				-	Buscar algún elemento

		*/
			//Función comidas para recorrer un array enviado como parámetro
		function mostrarComidas($arrays){
			$resultado = "";
			foreach ($arrays as $array) {
				$resultado .= "<li>$array </li>"; //Se concatena los resultados
		}	
			return $resultado;
		}

		$comidas = ['Spaguetis', 'Carne asada', 'Pizza', 'Camarones al ajillo', 'Sushi', 'Arroz de espinacas', 'Garbanzos', 'Papa rellena'];


		//Recorrer y mostrar
		echo "<h1>Recorrer y mostrar</h1>";
		echo mostrarComidas($comidas);

		echo "<hr/>";
		
		//Ordenarlo y mostrarlo
		echo "<h1>Ordenarlo y mostrarlo</h1>";
		asort($comidas);

		echo mostrarComidas($comidas);

		echo "<hr/>";

		//Mostrar su longitud
		echo "<h1>Número total de elementos</h1>";
		echo count($comidas);

		echo "<hr/>";

		//Buscar un elemento
		echo "<h1>Buscar un elemento</h1>";
		$busqueda = 'Pizza';		
		$encontrar=array_search($busqueda, $comidas);

		if (!empty($encontrar)){
			echo "<h5>La comida $busqueda, se encontró correctamente, en el índice: $encontrar</h5>";
		}else {
			echo "<h5>La comida $busqueda, no se encontró</h5>";
		}
		

	?>
</body>
</html>