<?php
require_once 'ModeloBase.php';
/**
 * Modelo
 *
 * @author Luis Hernandez<luifo2033@gmail.com>
 */
class Nota extends ModeloBase{
    //Atributos
    public $nombre;
    public $contenido;
    
    //Constructor para cargar constructor de base de datos de Modelo Base
    function __construct() {
        parent::__construct();
    }

    
    function getNombre() {
        return $this->nombre;
    }

    function getContenido() {
        return $this->contenido;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setContenido($contenido) {
        $this->contenido = $contenido;
    }

   //Métodos para uso de las clases creadas en el modelo
    
}
