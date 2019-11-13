<?php

/* 
 * Conexión a base de datos
 */
$servidor = "localhost";
$usuario = 'root';
$password = '';
$baseDatos = 'blog_master';
$db = mysqli_connect($servidor, $usuario, $password, $baseDatos);

/*Setear utf8 a la BD*/
mysqli_query($db, "SET NAMES 'utf8'");

// Iniciar sesión
session_start();

