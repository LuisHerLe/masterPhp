<?php
namespace MisClases;

class Categoria {

//Atributos
    public $nombre;
    public $descripcion;

    //Constructor
    function __construct() {
        $this->nombre = 'Acción';
        $this->descripcion = 'Categoría enfocada a las review de videojuegos de acción';
    }

}
