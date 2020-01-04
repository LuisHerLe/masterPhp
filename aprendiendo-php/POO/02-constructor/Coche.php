<?php

//Una clase puede ser un molde para crear más objetos de tipo coche con características parecidas
//Definir clase
class Coche {

    //Atributos o propiedades (variables)
    //Public: Se puede acceder a él desde cualquier lugar, dentro de clases que hereden la super clase o inclusio fuera de la clase
    //Protected: Se puede acceder desde la clase que los define y desde clases que hereden la super clase
    //Privated: Sólo se pueden acceder desde esta clase
    public $color;
    protected $marca;
    private $modelo;
    public $velocidad;
    public $caballaje;
    public $plazas;

    //Crear constructor de la clase
    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas) {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }

    //Métodos, son acciones que hace el objeto (función)
    //get: Obtener, set: Modificar

    function getColor() {
        return $this->color;
    }

    function getMarca() {
        return $this->marca;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getVelocidad() {
        return $this->velocidad;
    }

    function getCaballaje() {
        return $this->caballaje;
    }

    function getPlazas() {
        return $this->plazas;
    }

    function setColor($color) {
        $this->color = $color;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setVelocidad($velocidad) {
        $this->velocidad = $velocidad;
    }

    function setCaballaje($caballaje) {
        $this->caballaje = $caballaje;
    }

    function setPlazas($plazas) {
        $this->plazas = $plazas;
    }

//Métodos
    public function acelerar() {
        $this->velocidad++;
    }

    public function frenar() {
        $this->velocidad--;
    }

    public function mostrarInformacion(Coche $miObjeto) {

        if (is_object($miObjeto)) {

            $informacion = "<h1>Información del Coche</h1>";
            $informacion .= "<br/> Color : " . $miObjeto->color;
            $informacion .= "<br/> Modelo : " . $miObjeto->modelo;
            $informacion .= "<br/> Velocidad : " . $miObjeto->velocidad;

            return $informacion;
        } else {
            return $informacion = "Tu dato es este: " . $miObjeto;
        }
    }

}

?>