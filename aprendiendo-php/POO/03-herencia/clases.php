<?php

//HERENCIA: Posibilidad de compartir atributos y métodos entre clases

class Persona {

    //Atributos
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;

    //Get and Set
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    //Métodos
    public function hablar() {
        return "Estoy hablando";
    }

    public function caminar() {
        return "Estoy caminando";
    }

}

class Informatico extends Persona {

    //Atributos
    public $lenguajes;
    public $experienciaProgramador;

    public function sabeLenguajes($lenguajes) {
        $this->lenguajes = $lenguajes;
        return $this->lenguajes;
    }
    
    //Constructor
    
    function __construct() {
        $this->lenguajes = "HTML, CSS, JS";
        $this->experienciaProgramador = 10;
    }

        //Get and set
    public function Programar() {
        return "Soy programador";
    }

    public function repararOrdenador() {
        return "Reparar ordenadores";
    }

    public function hacerOfimatica() {
        return "Estoy escribiendo en word";
    }

}

class tecnicoRedes extends Informatico {

    //Atributos
    public $auditarRedes;
    public $experienciaRedes;

    //Constructor
    function __construct() {
        parent::__construct(); //Heredar el constructor del padre!!!!!!!!
        
        $this->auditarRedes = 'Experto';
        $this->experienciaRedes = 5;
    }

    
    //Métodos
    public function auditoria() {
        return "Estoy auditando una red";
    }

}

class Diseñador extends Persona {
    public $progomasDiseño = array();
    
    function getPrgomasDiseño() {
        return $this->progomasDiseño;
    }

    function setPrgomasDiseño($prgomasDiseño) {
        $this->progomasDiseño = $prgomasDiseño;
    }


    
}
