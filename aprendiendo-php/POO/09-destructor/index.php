<?php

class Usuario{
    public $nombre;
    public $email;
    
    function __construct() {
        $this->nombre = 'Luifo';
        $this->email = 'luifo@luifo.com';
    }

            public function __destruct() {
        echo "Instancia destruida";
    }
    
    public function __toString() {
        return "Hola, {$this->nombre}, estás registrado con el correo {$this->email}";
    }
}

$usuario = new Usuario();
echo $usuario;

var_dump($usuario);
//
//for($i=0; $i<=200;$i++){
//    echo $i.'<br/>';
//}