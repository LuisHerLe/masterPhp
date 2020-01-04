<?php

if(isset($_POST)){
    require_once 'includes/conexion.php';
    
    //Ternaria
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    
    $errores = array();
    
    if(!empty(($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre))){
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['nombre'] = "El nombre de la categoría no es válida";
    }
    
    if(count($errores) == 0){
        $sql = "INSERT INTO categorias VALUEs(null, '$nombre')";
        $guardar = mysqli_query($db, $sql);
        header("Location: index.php");
    }   
    
}

