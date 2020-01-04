<?php

// Iniciar la sesión y la conexión a la DB

require_once 'includes/conexion.php';

// Recoger los datos del formulario

if (isset($_POST)) {

    //Borrar error aniguo
    if (isset($_SESSION['error_login'])) {
        session_unset($_SESSION['error_login']);
    }

    // Borrar campos en blanco y asignar variables POST a las locales
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Consulta para comprobar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE s_email = '$email'";
    $login = mysqli_query($db, $sql);

    //Validar que la consulta $login solo retorne una fila
    if ($login && mysqli_num_rows($login) == 1) {

        //Obtener objeto Login
        $usuario = mysqli_fetch_assoc($login);

        // Comprobar email y contraseña (Credenciales)
        $verificada = password_verify($password, $usuario['s_password']);

        if ($verificada) {

            // Utilizar una sesión para guardar los datos del usuario logueado
            $_SESSION['usuario'] = $usuario;

            if (isset($_SESSION['error_login'])) {
                unset($_SESSION['error_login']);
            }
        } else {

            // Mensaje de error enviar una sesión con el fallo
            $_SESSION['error_login'] = "Login incorrecto";
        }
    } else {
        $_SESSION['error_login'] = "Login incorrecto";
    }
}

// Redirigir al index.php
header('location: index.php');





