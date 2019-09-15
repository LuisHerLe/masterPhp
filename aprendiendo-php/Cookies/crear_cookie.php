<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cookies</title>
</head>
<body>

	<?php
	/*
		Cookies: Se puede persistir información del usuario
	*/ 
		
        //Crear una cookie
        //setcookie("nombre","Valor que puede ser texto",caducidad,ruta, dominio);
        setcookie("autor","Brandon Sanderson");
        
        //Cookie con expiración
        setcookie("oneyear", "Un cookie de 365 días", time()+(60*60*24*365));
        
	?>
    <p>
        <a href="ver_cookie.php">Ir a ver las cookies</a>
    </p>
    
    <p>
        <a href="eliminar_cookie.php">Eliminar las cookies</a>
    </p>
</body>
</html>