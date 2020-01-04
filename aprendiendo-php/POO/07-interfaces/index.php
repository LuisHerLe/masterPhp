<?php

interface Ordenador {

    public function encender();

    public function apagar();

    public function reiniciar();

    public function desfragmentar();

    public function detectarUSB();
}

class iMac implements Ordenador {

    //Atributos
    private $modelo;

    function getModelo() {
        return $this->modelo;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

//Métodos
    public function encender() {
        return 'Lo que sea';
    }
    
    public function apagar() {
        
    }
    
    public function reiniciar() {
        
    }
    
    public function desfragmentar() {
        
    }
    public function detectarUSB() {
        
    }
}

$mac = new iMac;
$mac->setModelo('Mac Book 2019');
echo $mac->getModelo();
var_dump($mac);

echo '<br/>'. $mac->encender();