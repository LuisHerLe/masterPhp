<?php

require_once 'autoload.php';

/*
  $usuario = new Usuario();
  echo "<p>$usuario->nombre</p>";
  echo "<p>$usuario->email</p>";

  $categoria = new Categoria();
  echo '</p>La categoría es: '.$categoria->nombre.'</p>';
 * */

//Espacios de nombres y paquetes
use MisClases\Usuario,
    MisClases\Categoria,
    MisClases\Entrada;
use PanelAdministrador\Usuario as PanelUsuario;

class Principal {

    //Atributos
    public $usuario;
    public $categoria;
    public $entrada;

    //Constructor    
    public function __construct() {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada;
    }

    //Getter and setter
    function getUsuario() {
        return $this->usuario;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getEntrada() {
        return $this->entrada;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setEntrada($entrada) {
        $this->entrada = $entrada;
    }
    
    function informacion(){
        echo __CLASS__;
    }

}

$principal = new Principal();
$principal->informacion();
//var_dump($principal->usuario);
//var_dump(get_class_methods($principal)); //Saber qué métodos existen
$metodos = get_class_methods($principal);
$busqueda = array_search('setEntrada', $metodos);
var_dump($busqueda);

$usuario = new PanelUsuario();
var_dump($usuario);

//Comprobar si existe una clase

$claseExiste = @class_exists('MisClases\Usuario2');

if ($claseExiste) {
    echo "<h3>La clase SI existe</h3>";
} else {
    echo "<h3>La clase NO existe</h3>";
}