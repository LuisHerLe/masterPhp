<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 5</title>
</head>
<body>
	<?php
		/*
			Ejercicio 5: Crear un array con el contenido de la siguiente tabla:

			- Columnas: Acción, Aventura y Deportes
		*/

		//Crear array asociativo:
		$videoJuegos = array(
			"ACCION" => array('BattleField', 'Call of Duty', 'God Of War', 'Gear Of Ward'),
			"AVENTURA" => array('Watch Dog', 'GTA 5', 'Crash', 'Prince Of Pershia'),
			"DEPORTES" => array('Fifa 19', 'PES 19', 'NBA 2k19', 'Moto G 19')
		);

		//var_dump($videoJuegos);
		//Encontrar los índices de la tabla -->		var_dump(array_keys($videoJuegos));

		
		$categorias=array_keys($videoJuegos);
		
	?>
	<!-- Crear Tabla -->
	<table border="1">
		<?php require_once 'ejercicio 5/encabezados.php';?>
		<!-- Encabezado -->

		<!-- Fila2 -->
		<tr>
			<td><?=$videoJuegos['ACCION'][0]?></td>
			<td><?=$videoJuegos['AVENTURA'][0]?></td>
			<td><?=$videoJuegos['DEPORTES'][0]?></td>
		</tr>
		<!-- Primera Fila -->
			<?php require_once 'ejercicio 5/primera.php';?>
		<!-- Segunda Fila -->
			<?php require_once 'ejercicio 5/segunda.php';?>
		<!-- Tercera Fila -->
			<?php require_once 'ejercicio 5/tercera.php';?>

</body>
</html>