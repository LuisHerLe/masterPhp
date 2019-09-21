<?php

/* 
 * Recibir lo del método GET
 */

if(isset($_POST['titulo']) && isset($_POST['comentario'])){
    echo '<h1>Nombre del título:</h1> ' . $_POST['titulo'] . '<hr/>';
    echo '<h1>Comentario del título:</h1> ' . $_POST['comentario'];
}else{
    echo 'No se recibieron los parámetros de forma correcta';
}
