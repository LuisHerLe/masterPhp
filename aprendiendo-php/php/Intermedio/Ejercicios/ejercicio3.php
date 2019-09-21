<?php

/* 
 * Ejercicio: Hacer una interfaz de usuario (Formulario) con 2 inputs y 4 botones (Sumar, restar, multiplicar y dividir) 
 */

//Controlador de variables
$resultado = false;
$result = 0;

//Se valida si llegan los números por POST
 if(isset($_POST['num1']) && isset($_POST['num2'])){
    //Se cambia la bandera de variables
     $resultado = true;    
 }
 
 //Suma
 if (isset($_POST['sumar'])) {
    $result = $_POST['num1'] + $_POST['num2'];
}

//Resta
if (isset($_POST['restar'])) {
    $result = $_POST['num1'] - $_POST['num2'];
}

//Multiplicación
if (isset($_POST['multiplicar'])) {
    $result = $_POST['num1'] * $_POST['num2'];
}

//División
if (isset($_POST['dividir'])) {
    $result = $_POST['num1'] / $_POST['num2'];
}
 
?>

<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Ejercicio3</title>
    </head>
    <body>
        <header>
            <h1>Calculadora</h1>
        </header>
        <section>
            <!--Crear calculadora-->
            <div id="calculadora">
                <form action="ejercicio3.php" method="POST">
                    <p>
                        <label for="num1">Número 1</label>
                        <input type="number" name="num1" required="">
                    </p>
                    <p>
                        <label for="num2">Número 2</label>
                        <input type="number" name="num2" required="">
                    </p>
                    <p>
                        <input type="submit" value="Sumar" name="sumar"/>
                        <input type="submit" value="Restar" name="restar"/>
                        <input type="submit" value="Multiplicar" name="multiplicar"/>
                        <input type="submit" value="Dividir" name="dividir"/>
                    </p>
                    <!--Mostrar resultado-->
                    <div id="calculo">
                        <label>Resultado: </label> <input type="text" name="resultadoCal" value="<?=$result?>" readonly=""/>
                    </div>
                </form>
            </div>
        </section>
    </body>
</html>
