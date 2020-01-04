<?php
require_once 'includes/conexion.php';

var_dump($_SESSION['usuario']['n_id']);
var_dump($_GET['id']);
if(isset($_SESSION['usuario']) && isset($_GET['id'])){
    $entrada_id = $_GET['id'];
    $usuario_id = $_SESSION['usuario']['n_id'];
    $sql = "DELETE FROM entradas WHERE n_usuario_id = $usuario_id AND n_id=$entrada_id";
    mysqli_query($db, $sql);
 
}
header("Location: index.php");
?>