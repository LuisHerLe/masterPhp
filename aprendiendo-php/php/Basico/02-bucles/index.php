<!DOCTYPE html>
<html>
<head>
	<title>Bucles</title>
</head>
<body>

	<h1>WHILE</h1>
<?php

//Bucles para tabla de multiplicar

/*
	isser() -- Comprobar si una variable enviada por URL existe y no genere error
	$variable= (tipo)valor -- Castear un valor
		Ejemplo: $numero = (int)$_GET['numero'];
*/

if(isset($_GET['numero'])){
	$numero = (int)$_GET['numero'];
}else {
	$numero = 1;
}

echo "<h2>Tabla de multiplicar del número $numero</h2>";
$contador = 0;

while ( $contador<= 10) {
	echo "$numero x $contador = " . ($numero * $contador) . '<br/>';
	$contador++;
}
?>

<hr/>


<h1>DO WHILE</h1>
<?php
	//Sirve para ejecutar la instrucción al menos una vez
$edad = 18;
$contador= 1;
do {
	echo "Tienes acceso a un bar, $contador <br/>";
	$contador++;
} while ( $edad>= 18 && $contador<=10);
	
?>

<h1>FOR</h1>

<?php
//Bucle "para"

$resultado = 0;
	for ($i=0; $i <= 10 ; $i++) { 
		$resultado= $resultado + $i;
		echo "El resultado es: $resultado<br/>";

	}

?>
<hr/>

<h1>BREAK</h1>

<?php
//Bucle "para"

$resultado = 0;
	for ($i=0; $i <= 10 ; $i++) { 
		if($i==5){
			echo("no podemos seguir");
			break;
		}
		$resultado= $resultado + $i;
		echo "El resultado es: $resultado<br/>";

	}
?>

<hr/>

</body>
</html>