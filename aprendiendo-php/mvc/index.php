<h1>Bienvenido a mi página web con el patrón MVC</h1>
<?php
require_once 'autoload.php';


if(isset($_GET['controller'])){
    $nombre_controlador = $_GET['controller'].'Controller';
    
}else {
        echo 'La página web que estás buscando, no existe';
        exit();
    }


if (class_exists($nombre_controlador)) {
    
    $controlador = new $nombre_controlador;

    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    } else {
        echo 'La página web que estás buscando, no existe';
    }
} else {
    echo 'La página web que estás buscando, no existe';
}
