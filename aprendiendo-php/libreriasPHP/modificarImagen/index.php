<?php
require_once '../vendor/autoload.php';

//El formato que se usa para los tamaños es en pixeles pero no se indican en los métodos

$imagenGuardada = 'lobo.jpg';
$imagenNueva = 'imagenNueva.jpg';

$thumb = new PHPThumb\GD($imagenGuardada);

//Cambiar tamaño
$thumb->resize(600,600);

//Recortar con crop
$thumb->cropFromCenter(400);

//Mostrar
$thumb->show();

//Guardar
$thumb->save($imagenNueva);
