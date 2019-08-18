<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title><Imprimir por pantalla Master en PHP</title>
</head>
<body>
	<h1>Master en PGP</h1>
<?php
	echo '<h3>Listado de videojuegos: </h3>';
	echo '<ul>
			<li>GTA</li>
			<li>Fifa</li>
			<li>Mario Bross</li>
			<ul></ul>';

	echo '<p>Se concatena ' . 'con un punto</p>';

	// El echo imprime por pantalla

	/*
	Comentario por bloque
	*/

	$miPrimeraVariable = 'Luifo';
	echo 'Soy    ' . $miPrimeraVariable;

	'<br/>';
	'<br/>';
	'<br/>';
	$string= 'cadena';
	$decimal= 3.14;
	$numero= 5;
	$verdadero = true;

	echo $string . ' - ' . $decimal . ' - '.  $numero . ' - '. $verdadero;
	'<hr/>';
	echo gettype($string) . ' - ' . gettype($decimal) . ' - '.  gettype($numero) . ' - '. gettype($verdadero);
?>

<hr/>
<h1>Constantes</h1>
<p>
<?php
	/*Contenedor de información, este valor nunca puede variar
		Se muestra sin el $
	*/

	define('constanteNombre', 'Luifo');
	define('web', 'index.html');
	echo constanteNombre;  
	echo '<h1>' . constanteNombre . '  ' . web .'</h1>';
?>
</p>
<hr/>
<h1>Constantes Pre definidas</h1>
<p>
<?php
	//Constantes Pre definidas
	echo PHP_VERSION . '<br/>';
	echo PHP_OS . '<br/>';
	echo PHP_EXTENSION_DIR . '<br/>';
	echo __line__ . '<br/>';
	echo __FILE__ . '<br/>';
	echo __FUNCTION__ . '<br/>';
	echo __CLASS__ . '<br/>';
	
?>
</p>
<hr/>
<p>
<h1>Operadores</h1>
<?php
	//Operadores matemáticos

	$numero1 = 15;
	$numero2= 3;
	echo 'Suma: '. ($numero1 + $numero2).'<br/>';
	echo 'Resta: '. ($numero1 - $numero2).'<br/>';
	echo 'Multiplicación: '. ($numero1 * $numero2).'<br/>';
	echo 'División: '. ($numero1 / $numero2).'<br/>';
	echo 'Resto: '. ($numero1 % $numero2).'<br/>';

?>

</p>
<hr/>
<p>
<h1>Operadores Incremento y decremento</h1>
<?php
	
	//Incremento 
	$year= 2019;
	$year++;
	echo $year  . '</br>';
	echo '<br/>';


	//Decremento
	$year= 2019;
	$year--;
	echo $year . '</br>';

	//Pre incremento
	$year= 2019;
	$year = 1 + $year;
	echo $year . '</br>';

	//Pre decremento
	$year= 2019;
	$year = 1 - $year;
	echo $year . '</br>';

?>

</p>
<hr/>
<p>
<h1>Operadoresde asignación</h1>
<?php
	
// El = es para asignar variables y constantes
// Los operadores de asignación se le pueden poner cualquier operador aritmético
	
	$edad = 55;
	echo $edad . '<br/>';
	
	//Asignación: edad = edad + 5
	$edad+=5;
	echo $edad . '<br/>';

	//Asignación: edad = edad - 5
	$edad-=5;
	echo $edad . '<br/>';	

	//Asignación: edad = edad * 5
	$edad*=5;
	echo $edad . '<br/>';	

?>

</p>
<hr/>
<p>
<h1>Variables super globales</h1>
<?php
	
// Variables del servidor
	echo '<h1>';
		echo $_SERVER['SERVER_ADDR']; //Obtiene la dirección IP del servidor 
	echo '</h1>';	

	echo '<h1>';
		echo $_SERVER['SERVER_NAME']; //Obtiene el nombre de dominio del servidor
	echo '</h1>';	

	echo '<h1>';
		echo $_SERVER['SERVER_SOFTWARE']; //Obtiene el software y la versión que se está usando en el servidor
	echo '</h1>';

	echo '<h1>';
	echo $_SERVER['HTTP_USER_AGENT']; //Obtiene la versión de navegador y S.O que usa el cliente
	echo '</h1>';		

	echo '<h1>';
	echo $_SERVER['REMOTE_ADDR']; //Obtiene dirección IP del cliente
	echo '</h1>';	

?>

</p>
<hr/>
<p>
<h1>Métodos GET y POST</h1>
<?php
	
// Variables del servidor
	

?>

</p>
<hr/>

<p>
<h1>Variables super globales</h1>
<h2>Formulario en PHP - MÉTODO GET</h2>	
<form method="GET" action="recibir.php">
	<p>
		<label for="nombre">Nombre: </label>
		<input type="text" name="nombre">
	</p>	
	<p>
		<label for="apellidos">Apellidos: </label>
		<input type="text" name="apellidos">
	</p>

	<p>
		<input type="submit" value="Enviar">
	</p>

</form>

<hr/>
<p>
<h1>Variables super globales - MÉTODO POST</h1>
<h2>Formulario en PHP</h2>	
<form method="POST" action="recibir.php">
	<p>
		<label for="nombre">Nombre: </label>
		<input type="text" name="nombre">
	</p>	
	<p>
		<label for="apellidos">Apellidos: </label>
		<input type="text" name="apellidos">
	</p>

	<p>
		<input type="submit" value="Enviar">
	</p>

</form>
<hr/>

<h1>Condicionales</h1>
<h2>If & else</h2>

<?php
	
	/* CONDICIONALES
	
	********** OPERADORES DE COMPARACIÓN: **********

	== Igual
	=== Idéntico (Incluye el mismo tipo de dato)
	!= Diferente
	<> Diferente
	!== No idéntico
	< Menor que
	<= Menor o igual que
	> Mayor que
	>= Mayor o igual que
*/

	$color= 'rojo';
	if($color =='rojo '){
		echo '<h3><strong>' . 'El color es rojo' . '</strong></h3>';
	}else
		{
			echo '<h3><strong>' . 'El color NO es rojo' . '</strong></h3>';

		}

	$year=2019;

	if($year < 2029){
		echo "El año es menor a 2019" . '<br/>';
	}else  {
		echo "El año es posterior a 2019" . '<br/>';
	}


	$edad = 18;
	$maroriaEdad = 18;

	if ($edad>= $maroriaEdad) {
		echo 'Tiene ' . "<strong>$edad</strong>," . ' por lo que es mayor de edad';
	}else {
		echo 'Tiene ' . "<strong>$edad</strong>," . ' por lo que <strong>no</strong> es mayor de edad' . '<br/>';
	}
echo "<br>";

	$num= 64;

	if ($num >= 18 && $num < 63) {
		echo "El número $num" . ' es una edad adulta';
	}elseif ($num > 63) {
		echo "El número $num" . ' es una edad adulta mayor';
	}else {
		echo "El número $num" . ' es un menor de edad';
	}

?>



<h1>Bucles</h1>
<?php
	
	/* CONDICIONALES
	if(condicion)
	{

	}else{

	}

	$_GET
	*/

?>



</body>
</html>
