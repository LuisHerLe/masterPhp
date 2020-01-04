<?php

/**
 * Modelo base
 *
 * @author Luis Hernandez<luifo2033@gmail.com>
 */

require_once 'config/DataBase.php';
class ModeloBase {
    //    
    public $db;
    
    function __construct() {
        $this->db = DataBase::conectar();
    }

    
    public function conseguirTodos(){
        return "Extrayendo todos los usuarios";
    }
}
