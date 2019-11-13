<?php

if (isset($_POST)) {

    require_once 'includes/conexion.php';

//Iniciar sesión
    if(isset($_SESSION)){
        session_start();
    }    

    //Validar valores nulos en las variables
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

    //Array de errores
    $errores = array();

    //Validar campo nombre
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = 'El nombre no es válido';
    }

    //Validar campo apellidos
    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
        $apellidos_validado = true;
    } else {
        $apellidos_validado = false;
        $errores['apellidos'] = 'Los apellidos no son válidos';
    }

    //Validar campo email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_validado = true;
    } else {
        $email_validado = false;
        $errores['email'] = 'El email no es válido';
    }

    //Validar campo password
    if (!empty($password)) {
        $password_validado = true;
    } else {
        $password_validado = false;
        $errores['password'] = 'La contraseña está vacía';
    }

    $guardar_usuario = false;
    if (count($errores) == 0) {
        //Insertar usuario en la base de datos
        $guardar_usuario = true;

        //Cifrar contraseña
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

        //Se crea el query para insertar datos en la tabla Usuarios
        $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE());";
        $guardar = mysqli_query($db, $sql);
        
       
        if ($guardar) {
            $_SESSION['completado'] = "El registro se ha completado con éxito";
        } else {
            var_dump(mysqli_error($db));
            $_SESSION['errores']['general'] = 'Fallo al guardar el usuario';
        }
    } else {
        //No se permite insertar datos
        $_SESSION['errores'] = $errores;
        //Redireccionar a la página principal conteniendo el array de errores
    }
}

header('location: index.php');
