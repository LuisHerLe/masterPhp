<?php

require_once 'ModeloBase.php';

/**
 * Modelo
 *
 * @author Luis Hernandez<luifo2033@gmail.com>
 */
class Nota extends ModeloBase {

    //Atributos
    public $id;
    public $usuario_id;
    public $titulo;
    public $descripcion;
    public $fecha;

    //Getters and setters
    function getId() {
        return $this->id;
    }

    function getUsuario_id() {
        return $this->usuario_id;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getFecha() {
        return $this->fecha;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsuario_id($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    //Constructor para cargar constructor de base de datos de Modelo Base
    function __construct() {
        parent::__construct();
    }

    //Métodos para uso de las clases creadas en el modelo
    public function guardar() {
        $sql = "INSERT INTO notas (usuario_id, titulo, descripcion, fecha) "
                . "values ({$this->usuario_id}, '{$this->titulo}', '{$this->descripcion}', CURDATE());";
        $guardado = $this->db->query($sql);
        return $guardado;
    }

}
