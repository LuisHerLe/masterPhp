<?php

require_once 'autoload.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';


try {
    if (isset($_GET['controller'])) {
        $nombre_controlador = $_GET['controller'] . 'Controller';
    }
} catch (Exception $e) {
    echo 'La página web que estás buscando, no existe (Controlador)' . '<hr/>';
    echo "Error: " . $e->getMessage();
    exit();
}

try {
    if (class_exists($nombre_controlador)) {

        $controlador = new $nombre_controlador;

        if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
            $action = $_GET['action'];
            $controlador->$action();
        } else {
            echo 'La página web que estás buscando, no existe (Método)';
        }
    } else {
        echo 'La página web que estás buscando, no existe (Clase)';
    }
} catch (Exception $e) {
    echo "Error: ". $e->getMessage();
    die();
}

require_once 'views/layout/footer.php';