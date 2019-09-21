<?php

/* 
 * En wamp, se puede modificar el tamaño máximo del archiivo a subir en la variable upload_max_filesize (PHP/Settings)
 */
//El archivo se guarda como un array
$archivo = $_FILES['Archivo'];
//var_dump($archivo);

//Acceder al archivo
$nombre = $archivo['name'];
$tipo = $archivo['type'];

//Validar la exensión del archivo
if($tipo == 'image/jpg' || $tipo == 'image/jpeg' || $tipo == 'image/png' || $tipo == 'image/gif'){
    if(is_dir('images')){
        subirImagen($archivo, $nombre);
    }else{
        mkdir('images', 0777);
        subirImagen($archivo, $nombre);
    }
        
}else{
    //Esperar 5 segundos para refrescarr y redireccionar a otra página
    header("Refresh: 5; URL=index.php");
    echo 'Sólo se pueden subir imágenes';
}

function subirImagen($archivo, $nombre){
   move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
   echo '<h1>Imagen subida correctamente<h1>';
   header("Refresh: 5; URL=index.php"); 
}