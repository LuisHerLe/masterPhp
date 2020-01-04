<?php

//Una clase puede ser un molde para crear más objetos de tipo coche con características parecidas

//Definir clase
class Coche{
    //Atributos o propiedades (variables)
    
    public $color = 'Rojo';
    public $marca = 'Ferrari';
    public $modelo = 'Aventador';
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;
    
    
    //Métodos, son acciones que hace el objeto (función)
    //get: Obtener, set: Modificar
    public function getColor (){
        //Busca en esta clase la propiedad que se requiera
        return $this->color;
    }
    
    public function setColor($color){
        $this->color = $color;
    }
    
    public function acelerar(){
        $this->velocidad++;
    }
    
    public function frenar(){
        $this->velocidad--;
    }
    
    public function getVelocidad(){
        return $this->velocidad;
    }
}

//Fin definición de clase

//Crear un objeto (Instanciar la clase) 
$coche = new Coche;

//Usar los métodos
//echo $coche->getVelocidad();

//Cambiar color
$coche->setColor("Amarillo");
echo "El color del coche es: " . $coche->getColor() . '<br/>';
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "Veocidad del coche: " . $coche->getVelocidad();
?>