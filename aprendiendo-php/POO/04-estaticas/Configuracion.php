<?php

class Configuracion {

    //Atributos
    public static $color;
    public static $newLetter;
    public static $entorno;

    //Get and set
    public static function getColor() {
        return self::$color;
    }

    public static function getNewLetter() {
        return self::$newLetter;
    }

    public static function getEntorno() {
        return self::$entorno;
    }

    public static function setColor($color) {
        self::$color = $color;
    }

    static function setNewLetter($newLetter) {
        self::$newLetter = $newLetter;
    }

    static function setEntorno($entorno) {
        self::$entorno = $entorno;
    }

}
?>