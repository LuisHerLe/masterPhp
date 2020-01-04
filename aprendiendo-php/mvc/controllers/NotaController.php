<?php

/**
 * Description of nota
 *
 * @author Luis Hernandez<luifo2033@gmail.com>
 */
class NotaController {
    
    public function listar(){
        
        //Requerir el modelo de nota
        require_once 'models/Nota.php';
        
        //Lógica acción controlador
        $nota = new Nota();
        $nota->setNombre("Hola");
        $nota->setContenido("Hola Mundo PHP MVC");
        
        require_once 'views/nota/listar.php';
        
    }
    
    public function crear(){
        
    }
    
    public function borrar(){
        
    }
}
