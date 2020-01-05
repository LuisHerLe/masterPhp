<?php

/**
 * El Controlador, que actúa como intermediario entre el Modelo y la Vista, gestionando el flujo de información entre ellos
    y las transformaciones para adaptar los datos a las necesidades de cada uno.
 * El controlador es el responsable de:
- Recibe los eventos de entrada (un clic, un cambio en un campo de texto, etc.).
- Contiene reglas de gestión de eventos, del tipo "SI Evento Z, entonces Acción W". 
    Estas acciones pueden suponer peticiones al modelo o a las vistas. 
    Una de estas peticiones a las vistas puede ser una llamada al método "Actualizar()". 
    Una petición al modelo puede ser "Obtener_tiempo_de_entrega ( nueva_orden_de_venta )". 
 *
 * @author Luis Hernandez<luifo2033@gmail.com>
 */

class UsuarioController{
    
    //Método 
    public function mostrarTodos() {
        
        //Se importa el modelo para usar las clases que allí existan y unirlo con las vistas
        require_once 'models/Usuario.php';
        
        $usuario = new Usuario();
        $todosLosUsuarios = $usuario->conseguirTodos('usuarios');
        
        //Se importan las vistas para que allí se usen los objetos que se creen aquí
        require_once 'views/usuarios/mostrarTodos.php';
    }
    
    public function crearUsuario() {
        require_once 'views/usuarios/crearUsuario.php';
        
    }
}