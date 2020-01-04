<?php

function mostrarError($errores, $campo) {
    $alerta = '';
    if (isset($errores[$campo]) && !empty($campo)) {
        $alerta = "<div class='alerta alerta-error'>" . $errores[$campo] . '</div>';
    }

    return $alerta;
}

function borrarErrores() {

    $borrado = false;
    if (isset($_SESSION['errores'])) {
        $_SESSION['errores'] = null;
        $borrado = true;
    }

    if (isset($_SESSION['completado'])) {
        $_SESSION['completado'] = null;
        $borrado = true;
    }

    if (isset($_SESSION['errores_entrada'])) {
        $_SESSION['errores_entrada'] = null;
        $borrado = true;
    }

    return $borrado;
}

function conseguirCategorias($conexion) {

    $sql = "SELECT * FROM categorias ORDER BY n_id ASC;";
    $categorias = mysqli_query($conexion, $sql);
    $resultado = array();
    if ($categorias && mysqli_num_rows($categorias) >= 1) {
        $resultado = $categorias;
    }

    return $resultado;
}

function conseguirUnaCategoria($conexion, $id) {

    $sql = "SELECT * FROM categorias WHERE n_id='$id';";
    $categorias = mysqli_query($conexion, $sql);
    
    $resultado = array();
    if ($categorias && mysqli_num_rows($categorias) == 1) {
        $resultado = mysqli_fetch_assoc($categorias);
    }

    return $resultado;
}

function conseguirEntrada($conexion, $id){
    $sql = "SELECT e.*, c.s_nombre as 'Categoría', CONCAT(u.s_nombre, ' ', u.s_apellidos) AS usuario FROM entradas e".
            " INNER JOIN categorias c ON e.n_categoria_id = c.n_id ".
            " INNER JOIN usuarios u ON e.n_usuario_id = u.n_id ".
            "WHERE e.n_id = $id";

    $entrada = mysqli_query($conexion, $sql);
    $resultado = array();
    
    if($entrada && mysqli_num_rows($entrada)>=1){
        $resultado = mysqli_fetch_assoc($entrada);        
    }
    
    return $resultado;
}

function conseguirEntradas($conexion, $limit = null, $categoria = null, $busqueda = null) {
    
    $sql = "SELECT e.*, c.s_nombre as 'Categoría' FROM entradas e " .
            "INNER JOIN categorias c ON e.n_categoria_id = c.n_id "; 
    
    if(!empty($categoria) && $categoria){
        $sql .= "WHERE e.n_categoria_id = $categoria ";            
    }
    
    if(!empty($busqueda)){
        $sql .= "WHERE e.s_titulo LIKE '%$busqueda%' ";
    }
    
    $sql .= "ORDER BY e.n_id DESC";
    if($limit){
        //$sql = sql . "LIMIT 4";
        $sql .= " LIMIT 4";
    }
    
    $sql .= ';';
    
    
    $entradas = mysqli_query($conexion, $sql);

    $resultado = array();

    if ($entradas && mysqli_num_rows($entradas) >= 1) {
        $resultado = $entradas;
    }

    return $entradas;
}
