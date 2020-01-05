<?php

echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';

require_once '../vendor/autoload.php';

//Conexión a DB
$conexion = new mysqli('localhost', 'root', '', 'notas_master', '3306');

if (!$conexion) {
    die('No es posible conectar a base de datos de MySQL: ' . mysqli_connect_error());
}
mysqli_query($conexion, 'SET NAMES \'utf8\'');

//Consultar en DB para paginar
$consulta = $conexion->query("SELECT COUNT(id) as 'total' FROM notas");
$numero_elementos = $consulta->fetch_object()->total;
$numeroElementosPaginar = 2;
//Hacer paginación
$pagination = new Zebra_Pagination();

//Número total de elementos a paginar
$pagination->records($numero_elementos);

//Número de elementos por página
$pagination->records_per_page($numeroElementosPaginar);

//Obtener página actual
$page = $pagination->get_page();
$empiezaAqui = ($page-1) * $numeroElementosPaginar;
$sql = "SELECT * FROM notas LIMIT $empiezaAqui,$numeroElementosPaginar";
$notas = $conexion->query($sql);



while ($nota = $notas->fetch_object()) {
    echo "<h1>{$nota->titulo}</h1><hr/>";
    echo "<h3>{$nota->descripcion}</h3>";
}

$pagination->render();