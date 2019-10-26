<?php declare(strict_types=1) ?>
<?php

/* 
 Permite traer elementos e índices de un array
 * 
 */

$libros = [
  "J.R.R Tolkien" => "El Señor de los Anillos",
    "J.R.R. Tolkien" => "El Hobbit",
    "C.S Lewis" => "Las Crónicas de Narnia",
    "J.K. Rowling" => "Harry Potter",
    "G.R.R. Martin" => "Canción de Hielo y Fuego",
    "Patrick Rothfuss" => "Crónica del Asesino de Reyes"
];
?>

<!DOCTYPE html>
<html lang="es">
    <header>
        <meta charset="utf8">
        <title>Libros de Fantasía</title>
    </header>
    <head>
        <!--Título de la página-->
        <h1 align="center">Top de libros de Fantasía</h1>
    </head>
    <body>
        <!-- Tabla de libros de fantasía -->
        <div align="center">
            <table align="center" border="1">
                <tr>
                    <th>Autor</th>
                    <th>Título</th>
                </tr>
                <?php
                    foreach($libros as $autor =>$libro):
                        echo "<tr><td>$autor</td><td>$libro</td></tr>";
                    endforeach;
                ?>
            </table>
            <h2>El mejor libro para mi</h2>
            <?php
                echo $libros['Patrick Rothfuss'];
            ?>
        </div>
    </body>

</html>
