<!DOCTYPE html>
<html lang="es">
<head>
	<title>Variables</title>
</head>
<body>

	<?php
		
		/*
			Funciones pre definidas: Son funciones propias de PHP que se encuentran disponibles en cualquier desarrollo.
		*/
			//Debuguear: Validar por pantalla el dipo de dato del contenido de una variable y donde se encuentra almacenada
			$nombre = 'Luis Fernando';
			var_dump($nombre);

			//Fechas
			echo date('d-m-Y');

			//Fecha en formato unix
			echo "<br/>";
			echo time();

			//Matemáticas
			echo "<br/>";
			echo "Raíz cuadrada de 25: ".sqrt(25);

			//Número aleatorio
			echo "<br/>";
			echo "Número aleatorio: entre 10 y 40: ".rand(10,40);
			
			//Número PI
			echo "<br/>";
			echo "Número PI: ".pi();

			//Redondear
			echo "<br/>";
			echo "Redondear con decimales: ".round(2.944,2).'<br/>';
			echo "Redondear sin decimales: ".round(2.4);
			
			//Conseguir tipo de variable
			echo "<br/>";
			echo gettype($nombre);

			//Funciones para validar si una variable es de un tipo u otro, devuelve un booleano			
			echo "<br/>";
			echo is_string($nombre); //(Aplica para cada tipo de dato string, float, booblean, etc)

			//Validar si existe una variable
			echo "<br/>";
			if (isset($variable)) {
				echo "La variable existe";
			}else{
				echo "la variable no existe";	
			}
			 
			//Quitar los espacios en blanco
			echo "<br/>";
			$frase = "    Luifo es el mejor    ";
			var_dump(trim($frase));

			//Eliminar variables e indices de arrays
			$year = 2019;
			unset($year);
			//var_dump($year);

			//Validar si una variable vacía / null / false / trim con sólo espacios en blanco
			$texto = "";
			if (empty($texto)) {
				echo "Está vacía";
			}

			//Contar caracteres de un string
			echo "<br/>";
			$cadena = "abcde";
			echo strlen($cadena);

			//Encontrar en un string la posición de un caracter determinado
			echo "<br/>";
			$frase= 'La vida es bella';
			echo strpos($frase, "l");

			//Reemplazar contenido (palabras)
			echo "<br/>";
			echo str_replace("vida", "mujer", $frase);

			//Convertir a mayúsculas y minúsculas
			echo "<br/>";
			echo strtolower($frase); //Minúscula
			echo "<br/>";
			echo strtoupper($frase); //Mayúscula
	?>
	
	

</body>
</html>