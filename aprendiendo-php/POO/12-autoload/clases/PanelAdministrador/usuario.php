<?php

namespace PanelAdministrador;

class Usuario{
    
    //Atributos
    public $nombre;
    public $email;
    
    //Constructor
    function __construct() {
        $this->nombre = 'Luis Hernández';
        $this->email = 'hernandez@hernandez.com';
    }
    

}