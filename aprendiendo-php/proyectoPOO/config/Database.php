<?php

/**
 * Conexión a base de datos
 * @author Luis Hernandez<luifo2033@gmail.com>
 */

class Database{
    
    public static function connect(){
        $db = new mysqli('localhost', 'tienda_master', 'root', '');
        $db->query("SET NAMES 'utf-8'");
    }
    
}
