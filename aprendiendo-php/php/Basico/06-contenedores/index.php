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
		$peliculas = array('Hombre en Llamas', 'Hotel Transilvania', 'Jhon Wick', 'Misión Imposible');
		$cantantes = ['Dr. Dre', 'Snoop Dog', 'Canserbero', 'usher'];

		//var_dump($peliculas);
		//var_dump($cantantes[2])

		//Mostrar por pantalla
		//echo $peliculas[0];

		echo "<h1>Listado de películas</h1>";
		//Recorrer el array con For
		echo "<ul>";		
		for ($i=0; $i < count($peliculas) ; $i++) { 
			echo "<li/>$peliculas[$i]</li>" ;
		}
		echo "</ul>";
		echo "</hr>";

		/*Recorrer por For Each

		foreach ($variable as $key => $value) {
			# code...
		}
		- variable: Array
		- key: Número del índice
		- value: Valor que hay dentro del índice
			
		*/
		echo "<h1>Listado de cantantes</h1>";

		//Forma1
		echo "<ul>";
		foreach ($cantantes as $cantante) {
			echo "<li>$cantante</li>";
		}
		echo "</ul>";

		//Forma 2
		echo "<ul>";
		foreach ($peliculas as $key => $pelicula) {
			echo "<li>$key - $pelicula</li>";
		}
		echo "</ul>";

		//Array asociativos
		$personas = array(
			'nombre' => 'Luis',
			'apellido' => 'Hernández',
			'web' => 'www.google.com',
		);

		var_dump($personas['apellido']);
		var_dump($personas);
		//var_dump($_GET);

		echo "<hr/>";

		$contactos= array(
			array(
				'nombre' => 'Luis',
				'apellido1' => 'Hernández',
				'apellido2' => 'Lenis',
				'parentezco' => 'Hijo'
			),
			array(
				'nombre' => 'Martha',
				'apellido1' => 'Lenis',
				'apellido2' => 'Velasquez',
				'parentezco' => 'Madre'
			),
			array(
				'nombre' => 'Jorge',
				'apellido1' => 'Hernández',
				'apellido2' => 'Velez',
				'parentezco' => 'Padre'
			),
		);

		var_dump($contactos);

		echo "<h2>Acdeder a Luis</h2>";
		echo "<p>";

			echo $contactos[0]['nombre'].'<br/>';
			echo $contactos[0]['parentezco'];

		echo "</p>";		

		foreach ($contactos as $key => $contacto) {
			var_dump($contacto['nombre']);
		}

		echo "<hr/>";

	?>
		

	
</body>
</html>