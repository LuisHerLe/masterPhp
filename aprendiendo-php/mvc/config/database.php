<?php

/**
 * Clase que almacena la conexión a base de datos tabla notas_master
 * @copyright (c) 2020, Luifo
 * @author Luis Hernandez<luifo2033@gmail.com>
 */

class DataBase {

    public static function conectar() {
        $conn = new mysqli('localhost', 'root', '', 'notas_master', '3306');
        if (!$conn) {
            die('No es posible conectar a base de datos de MySQL: ' . mysqli_connect_error());
        }
        mysqli_query($conn, 'SET NAMES \'utf8\'');
            return $conn;
            
        mysqli_close($conn);
    }

}
