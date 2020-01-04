<?php

require_once 'Coche.php';

$coche = new Coche('Rojo', 'Mazda', '3', 150, 200, 5);
$coche2 = new Coche('Azul', "Renault", 'Clio', 200, 1500, 4);

$coche->color = "Amarillo";
$coche->setMarca("Renault");
$coche->setModelo("Clio");
//var_dump($coche);
//var_dump($coche2);


echo $coche->mostrarInformacion($coche);

