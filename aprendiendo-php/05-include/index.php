<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Variables</title>
</head>
<body>
	
	<?php include 'includes/cabecera.php' ?>
	<?php include_once 'includes/cabecera.php' ?> <!-- Para que se muestre uno solo -->
	<!-- require 'includes/cabecera.php' --Es obligatorio, si no está, no se sigue con las demás instrucciones -->
		<hr/>

		<!-- Contenido -->
		<div>
			<h2>Esta es la página de inicio</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div> 
		<hr/>
		<?php var_dump($nombre)?>

		<!-- Pie de página -->	
	<?php include 'includes/footer.php'	?>

</body>
</html>