<?php

//Sirve para ejecutar un método estándar para cuando un método o un objeto no existe

class Persona {

    //Atributos
    private $nombre;
    private $edad;
    private $ciudad;

    //Construcror
    function __construct($nombre, $edad, $ciudad) {
        $this->nombre = 'Luifo';
        $this->edad = '34';
        $this->ciudad = 'Medellín';
    }

    public function __call($name, $arguments) {
        $prefix_metodo = substr($name, 0, 3);

        if ($prefix_metodo == 'get') {
            $nombre_metodo = substr(strtolower($name), 3);

            if (!isset($this->$nombre_metodo)) {
                return 'No existe el atributo '.$nombre_metodo.'!';
            }

            return $this->$nombre_metodo;
        } else {
            return 'No existe el método!!!!';
        }
    }

}

$persona = new Persona('Luifo', '34', 'Medellín');
//$persona->persona;
echo $persona->getNombre().'<br/>';
echo $persona->getEdad().'<br/>';
echo $persona->getCiudad().'<br/>';
echo $persona->getNacimiento().'<br/>';
