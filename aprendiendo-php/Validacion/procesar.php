<?php

/* 
 * Comprobar que llega información (Las variables llegan de index.php)
 */
$error = "Faltan datos";
if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['edad']) && !empty($_POST['email']) 
        && !empty($_POST['password']) && !empty($_POST['repassword'])){
    
    //Se pasa booleano a false porque llegaron todos los datos
    $error = "ok";

    //Creación de variables
    
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = (int)$_POST['edad'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    
    //Validar campo por campo
    
    //Validación nombre (Que no sea un string y que no sean letras con espacios (Expresión regular)
    if(!is_string($nombre) || !preg_match("/[a-zA-Z ]+/", $error)){
         $error= 'nombre';
    }
    
    //Validación apellido (Que no sea un string y que no sean letras con espacios (Expresión regular)
    if(!is_string($apellido) || !preg_match("/[a-zA-Z ]+/", $error)){
         $error= 'apellido';
    } 
    
    //Validación edad (Que no sea un número y que no sean int (Filter)
    if(!is_int($edad) || !filter_var($edad,FILTER_VALIDATE_INT)){
         $error= 'edad';
    }

    //Validación email (Que no sea un string y que no sean email (Filter)
    if(!is_string($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
         $error= 'email';
    }  
    
    //Validación contraseñas
    if((empty($password) || empty($repassword)) || ($password) != ($repassword)){
         $error= 'contraseñas';
    }
    
    if ($error!="ok"){
        //Redireccionar página a index.php
        header("Location:index.php?error=$error");
    }


}else{
    echo 'Hay errores en los datos recibidos';
    //Redireccionar página a index.php
    header("Location:index.php?error=$error");
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
        <!--Se crea un div para mostrar los datos-->
        <div>
            <!--Agrear pedazos de código de php para mostrar los datos-->
            <?php if($error == 'ok'): ?>
            <h1>Datos validados correctamente</h1>
            <p><?=$nombre?></p>
            <p><?=$apellido?></p>
            <p><?=$edad?></p>
            <p><?=$email?></p>
            <?php endif; ?>
        </div>
    </body>
</html>



