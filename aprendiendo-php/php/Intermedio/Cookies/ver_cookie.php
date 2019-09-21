<?php

/* 
 * Para mostrar la información que almacena las cookies
 * Se debe usar $_COOKIE, una variable superglobal (Array asociativo)
 */

//Mostrar el autor
if(isset($_COOKIE['autor'])){
    echo '<h1>' . $_COOKIE['autor'] . '</h1>';
}else{
    echo 'No se encontró la cookie';
}

echo '<hr/>';
//Mostrar caducidad de la cookie oneyear

if(isset($_COOKIE['oneyear'])){
    echo '<h1>' . $_COOKIE['oneyear'] . '</h1>';
}else{
    echo 'No se encontró la cookie';
}


