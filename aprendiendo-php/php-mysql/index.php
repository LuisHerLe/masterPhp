<?php

/* 
 Conexión a la base de datos
 */
$conexion = mysqli_connect("localhost","root", "", "phpmysql");

if(mysqli_connect_errno()){
    echo "No se pudo establecer conexión a la Base de datos: " .mysqli_connect_error();
}else{
    echo "Se estableció la conexión a la base de datos correctamente";
}

// Consulta para confirmar la codificación de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

//Consulta SELECT desde PHP
$query = mysqli_query($conexion, "SELECT * FROM notas");
//var_dump($query);
//var_dump($nota = mysqli_fetch_assoc($query));
while($notas = mysqli_fetch_assoc($query)){
    echo '<h3>'.$notas['s_titulo'].'</h3>';
    echo $notas['s_descripcion'].'<br/>';
}

// Insertar en la BD desde PHP
$insert = "INSERT INTO notas VALUES(null,'Nueva nota','Desde una variable','red')";
$result = mysqli_query($conexion, $insert);

if($result){
    echo "Registro registrado correctamente";
}else{
    echo 'Error al ingresar el nuevo registro: ' . mysqli_error($conexion); 
}