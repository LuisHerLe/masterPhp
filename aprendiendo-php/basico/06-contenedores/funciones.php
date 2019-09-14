<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Arrays y Matrices</title>
</head>
<body>
	<!-- Cabecera -->
	<?php
		
			//Arrays: Es una colección de datos (variables) y se accede a ellos por medio de un índice
		$cantantes = ['Dr. Dre', 'Snoop Dog', 'Canserbero', 'Usher', 'Ashanti', 'ZPU'];

		//Ordenar alfabéticamente
		//asort($cantantes);
		
		//Ordenar alfabéticamente y numéricamente
		//sort($cantantes);
		
		//Ordenar alfabéticamente inverso
		arsort($cantantes);

		

		//Añadir elementos a un array
		$cantantes[]= 'Nach';


		//Añadir elementos a un array push
		array_push($cantantes, 'Chojin');

		//Eliminar el último elemento de un array
		array_pop($cantantes);

		//Eliminar un elemento en concreto de un array
		unset($cantantes[1]);

		//Obtener un elemento aleatorio en concreto de un array
		echo array_rand($cantantes);

		//Dar la vuelta a un array
		var_dump(array_reverse($cantantes));

		//Buscar dentro de un array
		$resultado= array_search('Ashanti', $cantantes);
		var_dump("$resultado");

		//Contar número de elementos
		echo count($cantantes). '<br/>';
		echo sizeof($cantantes). '<br/>';


		var_dump($cantantes);

	?>
		

	
</body>
</html>