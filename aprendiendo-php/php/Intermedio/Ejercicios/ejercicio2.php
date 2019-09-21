<?php

/* 
 * Ejercicio: 
 * 1. Una función
 * 2. La función debe validar un email con un filter_var
 * 3. Recoger una variable por get y validarla
 * 4. Mostrar el resultado
 */

?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Ejercicio 2</title>
    </head>
    <body>
        <div>
            <h1><i>Validación</i></h1>
        </div>
        <div>
            <form action="index.php" method="GET">
                <p>
                    <label for="correo">Correo: </label>
                    <input type="email" name="correo" required="" autofocus="autofocus">
                </p>
                <p>
                    <input type="submit" value="Enviar">
                </p>
            </form>
        </div>
        
        <div>
            <h1><i>Respuesta Validación</i></h1>
        </div>
        <div>
            <?PHP
                if(isset($_GET['correo'])){
                    validation($_GET['correo']);
                }
                
                function validation($correo){
                    global $valid;
                    if(filter_var($correo, FILTER_VALIDATE_EMAIL)){                         
                        echo '<h2>El correo es válido</h2>';
                        //$valid = 'Válido';                      
                    }else{
                        echo '<h2>El correo <strong><i>NO es válido</i></strong></h2>';
                    }
                }
            ?>
            <p>
                <!--<h2>El correo es: <?=$valid?></h2>-->
            </p>
        </div>
    </body>
</html>
