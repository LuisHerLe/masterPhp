<?php

/* 
 * Comprobar que llega información
 */
$error = true;
if(isset($_POST['nombre']) && isset($_POST['apellido']) 
        && isset($_POST['edad']) && isset($_POST['email']) 
        && isset($_POST['password']) 
        && isset($_POST['repassword'])){
    
    //Creación de variables
    $error = false;
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
            

}else{
    echo 'Hay errores en los datos recibidos';
    header("Location:index.php?error=$error",);
}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Recibir datos del Formulario HTML</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

    </body>
</html>>



