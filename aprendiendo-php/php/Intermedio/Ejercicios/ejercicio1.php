<?php

/* 
 * Ejercicio: Crear una sesión que aumente su valor en uno 
 * o disminuya en uno en función de si el parámetro get counter está en uno o en cero
 */

//Iniciar sesión
session_start();

//Condición, si se envía 1, aumenta, sino, disminuye
if(!isset($_SESSION['numero'])){
    $_SESSION['numero'] = 0;
}

    if(isset($_GET['counter']) && $_GET['counter']==1){
        $_SESSION['numero']++;
    }else{
        $_SESSION['numero']--;
    }
?>
<div>
    <h1>El valor de la sesión número es: <?=$_SESSION['numero']?></h1>
</div>
<div>
    <a href="index.php?counter=1">Aumtner el valor</a>
</div>

<div>
    <a href="index.php?counter=0">Disminuir el valor</a>
</div>