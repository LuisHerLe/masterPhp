<?php

/* 
 * Manejo de ficheros


//Abrir un fichero
$abrirFichero = fopen("fichero_texto.txt", "a+");


while (!feof($abrirFichero)){
    //Leer contenido
    echo $contenido = fgets($abrirFichero) . '<br/>';
}

//Escribir en un fichero
fwrite($abrirFichero, "Libro 2: Elantris");
        
//Cerrar fichero
fclose($abrirFichero);
 * 
 */

//Copiar un archivo
//copy("fichero_texto.txt", 'fichero_copiado.txt') or die('Error al copiar el archivo');

//Renombrar
//rename('fichero_texto.txt', 'fichero_renombrado.txt');

//Eliminar un fichero
//unlink('fichero_renombrado.txt') or die('Error al borrar');

//Comprobar si un fichero existe
/*
if(file_exists('fichero_copiado.txt')){
    echo 'El Fichero existe';
} else {
    echo 'El Fichero NO existe';
}
 */