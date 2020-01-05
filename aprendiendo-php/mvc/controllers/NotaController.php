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
                
        $notas = $nota->conseguirTodos('notas');
        
        //Vista
        require_once 'views/nota/listar.php';
        
    }
    
    public function crear(){
        require_once 'models/Nota.php';
        $nota = new Nota();
        $nota->setUsuario_id(1);
        $nota->setTitulo('Nota 5');
        $nota->setDescripcion("Nota quinta desde Controller PHP MVC");
        
        $guardar = $nota->guardar();
        header("Location: index.php?controller=Nota&action=listar");
    }
    
    public function borrar(){
        
    }
}
