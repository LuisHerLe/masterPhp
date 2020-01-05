<?php

require_once '../vendor/autoload.php';

$frutas = array("manzana", "Piña", "Uvas", "Fresas");
\FB::log($frutas);

echo "Hola mundo";

\FB::log("Muestra esto en consola");
\FB::info("Info");

$nombre = array("Luis", "Leslie", "Martha", "Santiago");
\FB::error($nombre);