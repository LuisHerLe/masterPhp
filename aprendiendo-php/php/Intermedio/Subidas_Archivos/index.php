<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Subir archivos</title>
    </head>
    <body>
        <h1>Subir archivos con PHP</h1>
        
        <!--Crear formulario-->
        <form action="subir.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="Archivo">
            <input type="submit" value="Eviar">
        </form>
        
        <h1>Listado de imágenes</h1>
        <?php
            $gestor = opendir('./images');
            if($gestor):
                    while (($image = readdir($gestor))!== false):
                        if($image != '.' && $image != '..'):
                            echo "<img src= 'images/$image' width='200px'/><br/>";
                        endif;
                    endwhile;
                endif;
        ?>
    </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

