<?php

/* 
 * Directorios, se pueden usar comandos de linux
*/

if(!is_dir('Autores')){
    mkdir('Autores',0777) or die('No se puede crear la carpeta');
    
} else {
    //rmdir('Autores');
    //echo 'Se borró con exito la carpeta';
    
    //Recorrer el contenido del directorio y mostrar los nombres de los archivos
    if($gestor = opendir('./Autores')){
        while(false !==($archivo = readdir($gestor))){
            if($archivo != '.' && $archivo != '..'){
                echo $archivo.'<br/>';
            }
            
        }
    }
}
