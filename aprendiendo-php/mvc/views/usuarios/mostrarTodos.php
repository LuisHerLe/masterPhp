<!--
 * La Vista, o interfaz de usuario, que compone la información que se envía al cliente y los mecanismos interacción con éste.

 * El controlador es el responsable de:
- Recibir datos del modelo y los muestra al usuario.
- Tienen un registro de su controlador asociado (normalmente porque además lo instancia).
- Pueden dar el servicio de "Actualización()", para que sea invocado por el controlador o 
    por el modelo (cuando es un modelo activo que informa de los cambios en los datos producidos por otros agentes). 
 
 * @author Luis Hernandez<luifo2033@gmail.com>
-->

<h1>Listar todos los usuarios</h1>

<?php while ($usuario = $todosLosUsuarios->fetch_object()) : ?>
    <p><?= $usuario->id ?>: <?= $usuario->nombre ?> <?= $usuario->apellidos ?></p>
<?php endwhile; ?>


