<!DOCTYPE html>
<html>
<head>
	<title>Funciones</title>
</head>
<body>

	<?php
		/*
			-Funciones: Es un conjunto de órdenes (Instrucciones) agrupados por un nombre en concreto, esta función se puede reutilizar en cualquier punto invocando el nombre de la función.
		

		function nombreFuncion($Parametro){
			#Código
		}
		*/

		//Ejemplo 1
		echo "<h1>Ejemplo 1</h1>";
		function muestraNombres(){
			echo "Luifo <br/>";
			echo "Martha <br/>";
			echo "Erik <br/>";
			echo "Sophia <br/>";
		}

		muestraNombres();
		echo "<hr/>";


		//Ejemplo 2
		echo "<h1>Ejemplo 2</h1>";
		function tabla($numero){
			echo "<h2>Tabla del $numero</h2>";
			for ($i=1; $i<=10 ; $i++) { 
				$multiplica = $numero * $i;
				echo "$numero x $i = " . $multiplica . '<br/>';
			}

		}
		/*
		if (isset($_GET['num'])) {
			tabla($_GET['num']);
		}else{
			echo "Favor ingresar bien las variables";
		}*/
		
		
		for ($i=1; $i <=2 ; $i++) { 
			tabla($i);
		}
		echo "<hr/>";

		//Ejemplo 3
		
		echo "<h1>Ejemplo 3</h1>";
		function calculadora($num1, $num2){
			//Conjunto de instrucciones a ejecutar
			$suma = $num1 + $num2;
			$resta = $num1 - $num2;
			$multi = $num1*$num2;
			$division = $num1/$num2;
			
			echo "Suma: $suma <br/>";
			echo "Resta: $resta <br/>";
			echo "Multiplicación: $multi <br/>";
			echo "División: $division <br/>";
		}

		calculadora(10,5);
		echo "<hr/>";

		/*function calculadora($num1, $num2, $negrita=false){

			if ($negrita) {
				echo "<h2>";
			}
			//Conjunto de instrucciones a ejecutar
			$suma = $num1 + $num2;
			$resta = $num1 - $num2;
			$multi = $num1*$num2;
			$division = $num1/$num2;
			
			echo "Suma: $suma <br/>";
			echo "Resta: $resta <br/>";
			echo "Multiplicación: $multi <br/>";
			echo "División: $division <br/>";
			echo "<hr/>";
			if ($negrita) {
				echo "</h2>";
			}
		}

		calculadora(10,5);
		calculadora(5,7);
		calculadora(2,20, true);

		*/

		//Ejemplo 4
		echo "<h1>Ejemplo 4</h1>";
	function devuelveNombre($nombre){
		return "El nombre es: $nombre";
	}

	echo devuelveNombre("Luifo");
	echo "<hr/>";

	//Ejemplo 5
	echo "<h1>Ejemplo 5</h1>";
	function calculadoraReturn($num1, $num2){
		//Conjunto de instrucciones a ejecutar
		$suma = $num1 + $num2;
		$resta = $num1 - $num2;
		$multi = $num1*$num2;
		$division = $num1/$num2;
		$cadena = "";
		
		$cadena .= "Suma: $suma <br/>";
		$cadena .= "Resta: $resta <br/>";
		$cadena .= "Multiplicación: $multi <br/>";
		$cadena .= "División: $division <br/>";

		return $cadena;
	}

	echo calculadoraReturn(10,5);
	echo "<hr/>";

		//Ejemplo 6
	echo "<h1>Ejemplo 6</h1>";

	function getNombre($nombre){

		$texto = "El nombre es: $nombre";
		return $texto;
	}

	function devuelveNombreCompleto($nombre, $apellido){
		$texto = getNombre($nombre)
				 ."<br/>".
				 "Los apellidos son: $apellido";
				 return $texto;
	}

	echo devuelveNombreCompleto("Luis", "Hernández Lenis");

	echo "<hr/>";

		//Ejemplo 7
	echo "<h1>Ejemplo 7</h1>";
	?>
	
	

</body>
</html>