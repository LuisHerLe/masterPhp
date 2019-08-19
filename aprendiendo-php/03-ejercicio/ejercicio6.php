<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio5</title>
</head>
<body>

	<?php
		/*
			- Mostrar todas las tablas de multiplicar del 1 al 10
		*/
		echo "<table border=1>";
			echo "<th>Multiplicador</th>";
			for ($i=1; $i <=10 ; $i++) { 
				echo "<th>Tabla del $i</th>";
			}
				for ($col=1; $col <=10 ; $col++) { 
					echo "<tr>";
					echo "<th>$col</th>";
					
					for ($fil=1; $fil <=10 ; $fil++) { 
						echo "<td align= 'center'>" . ($col * $fil) . " </td>";
					}
				echo "</tr>";
				}
	echo "</table>";
	?>

</body>
</html>