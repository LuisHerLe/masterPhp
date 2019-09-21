<?php

/* 
 * Eliminar las cookies
 */

if(isset($_COOKIE['autor'])){
    //Eliminar
    unset($_COOKIE['autor']);   
    
    //Caducar la cookie (Se resta 100 al timestamp
    setcookie('autor','',time()-100);
    
    unset($_COOKIE['oneyear']);   
    
    //Caducar la cookie (Se resta 100 al timestamp
    setcookie('oneyear','',time()-100);
}

//Cambiar la cabecera y redireccionar a otra página
header('location:ver_cookie.php');