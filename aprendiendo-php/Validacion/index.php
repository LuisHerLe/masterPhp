<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Validación de Formulario HTML</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Validar formularios en PHP</h1>
        <!--Crear un nuevo formulario-->
        <div>
            <form action="procesar.php" method="POST">
                <p> 
                    <label for="nombre">Nombre: </label>
                    <input type="text" name="nombre" placeholder="Nombre" pattern="[A-Za-z]*"/>
                </p>
                <p> 
                    <label for="apellido">Apellidos: </label>
                    <input type="text" name="apellido" placeholder="Apellidos" pattern="[A-Za-z]*"/>
                </p>
                <p> 
                    <label for="edad">Edad: </label>
                    <input type="text" name="edad" placeholder="Edad" pattern="[0-9]*"/>
                </p>
                <p> 
                    <label for="email">E-mail: </label>
                    <input type="text" name="email" placeholder="E-mail" required="required"/>
                </p>                
                <p> 
                    <label for="password">Contraseña: </label>
                    <input type="text" name="password" placeholder="Contraseña" required="required"/>
                </p>
                <p> 
                    <label for="repassword">Repetir Contraseña: </label>
                    <input type="repassword" name="repassword" placeholder="Contraseña" required="required"/>
                </p>                
                <p>
                    <input type="submit" value="Enviar">
                </p>
            </form>
        </div>
    </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

