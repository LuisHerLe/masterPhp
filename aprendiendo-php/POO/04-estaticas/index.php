<?php

require_once 'Configuracion.php';

Configuracion::setColor('Azul');
Configuracion::setEntorno('localhost');
Configuracion::setNewLetter(true);

echo Configuracion::$color . '<br/>';
echo Configuracion::$entorno . '<br/>';
echo Configuracion::$newLetter . '<br/>';

$config = new Configuracion();
$config->setColor('Rojo');
var_dump($config);
echo $config::getColor();