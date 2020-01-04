<?php

if (isset($_POST)) {

    require_once 'includes/conexion.php';

//Iniciar sesión
    if (!isset($_SESSION)) {

        session_start();
    }

    //Validar valores nulos en las variables
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $id_usuario = isset($_SESSION['usuario']['n_id']) ? (int) $_SESSION['usuario']['n_id'] : 0;
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

    $guardar_usuario = false;
    if (count($errores) == 0) {
        //Insertar usuario en la base de datos
        $guardar_usuario = true;
        
        $sql_mail = "SELECT s_email FROM usuarios WHERE s_email = '$email';";
        $query_mail = mysqli_query($db, $sql_mail);
        
        //Validar si el usuario existe
        if( $email != $_SESSION['usuario']['s_email'] && mysqli_num_rows($query_mail) == 1){
            $_SESSION['errores']['general'] = 'El usuario ya existe!';
        }else{

        //Se crea el query para actualizar datos en la tabla Usuarios
        $sql = "UPDATE usuarios SET s_nombre='$nombre', s_apellidos = '$apellidos', s_email='$email' WHERE n_id=$id_usuario;";
        $guardar = mysqli_query($db, $sql);


        if ($guardar) {
            $_SESSION['usuario']['s_nombre'] = $nombre ;
            $_SESSION['usuario']['s_apellidos'] = $apellidos;
            $_SESSION['usuario']['s_email'] = $email;
            
            $_SESSION['completado'] = "El registro se ha actualizado con éxito";
            
        } else {

            $_SESSION['errores']['general'] = 'Fallo al actualizar el usuario';
        }
    
    }
        } else {
        //No se permite insertar datos
        $_SESSION['errores'] = $errores;
    }
}
header('location: misDatos.php');

