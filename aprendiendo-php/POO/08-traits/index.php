<?php
//Trait permite definir una serie de métodos para compartie entre diferentes clases que no tengan las mismas características

trait Utilidades{
    public function mostrarNombre() {
        echo "<h1>El nombre es: ".$this->nombre."</h1>";
    }
}
class Coche{
    public  $nombre;
    public $marca;
    
    use Utilidades;
}

class Persona{
    public  $nombre;
    public  $apellidos;
    
    use Utilidades;
}

class VideoJuego{
    public  $nombre;
    public $anio;
    
    use Utilidades;
}

$coche = new Coche;
$coche->nombre = 'Ferrari';
$coche->mostrarNombre();

$persona = new Persona;
$persona->nombre = 'Luifo';
$persona->mostrarNombre();

$videoJuego = new VideoJuego;
$videoJuego->nombre = 'Gears 5';
$videoJuego->mostrarNombre();
var_dump($coche);





