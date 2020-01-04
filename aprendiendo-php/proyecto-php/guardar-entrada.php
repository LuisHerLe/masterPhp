<?php

if (isset($_POST)) {
    require_once 'includes/conexion.php';

    //Ternaria
    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
    $categoria = isset($_POST['categoria']) ? (int) $_POST['categoria'] : false;
    $usuario = (int) $_SESSION['usuario']['n_id'];

    $errores = array();

    if (empty($titulo)) {
        $errores['titulo'] = 'El título no es válido';
    }
    if (empty($descripcion)) {
        $errores['descripcion'] = 'La descripción no es válida';
    }

    if (empty($categoria) || !is_numeric($categoria)) {
        $errores['categoria'] = 'La categoría no es válida';
    }

    if (count($errores) == 0) {

        if ($_GET['editar']) {
            $entrada_id = $_GET['editar'];
            $usuario_id = $_SESSION['usuario']['n_id'];
            
            $sql = "UPDATE entradas SET s_titulo='$titulo', s_descripcion='$descripcion',d_fecha=CURDATE(), n_categoria_id=$categoria".
                    " WHERE n_id = $entrada_id AND n_usuario_id = $usuario_id";
            $guardar = mysqli_query($db, $sql);
        } else {
            $sql = "INSERT INTO entradas VALUES(null, $usuario, '$titulo', '$descripcion', CURDATE(), $categoria);";
            $guardar = mysqli_query($db, $sql);            
        }
        header("Location: index.php");
    } else {
        $_SESSION['errores_entrada'] = $errores;
        if($_GET['editar']){
            header("Location: editarEntrada.php?id=".$_GET['editar']);
        }else{
            header("Location: crearEntradas.php");
        }
        
    }
}

