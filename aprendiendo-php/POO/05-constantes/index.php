<?php

class Usuario{
    
    const URL_COMPLETA = 'http://localhost';
    //Atributos
    public $email;
    public $password;
    


    //Get and set
    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }
    
}

$usuario = new Usuario();
echo $usuario::URL_COMPLETA;
var_dump($usuario);