<?php

require_once 'clases.php';

$persona = new Persona();

$persona->setNombre("Luis");
$persona->setApellidos("Hernández Lenis");
var_dump($persona);

$informatico = new Informatico();
$informatico->setAltura(1.90);
$informatico->sabeLenguajes("HTML, CSS, PHP, JAVA");
var_dump($informatico);

$tecnico = new tecnicoRedes();
var_dump($tecnico);

$nata = new Diseñador();
$nata->setPrgomasDiseño(['Photoshop', 'Corel-Draw']);
var_dump($nata);