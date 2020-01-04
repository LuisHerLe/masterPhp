<?php include_once 'includes/cabecera.php'; ?>
<?php include_once 'includes/redireccion.php'; ?>
<?php include_once 'includes/lateral.php'; ?>

<DIV id="principal">
    <hgroup class="hgroup">
        <h1>Crear categorías</h1>    
        <h2> Añade nuevas categorías al blog para que los usuarios puedan usarlas al crear sus entradas</h2>
    </hgroup>
    
    <form action="guardar-categoria.php" method="POST" class="formCategoria">
        <label for="nombre">Nombre de la categoría:</label>
        <input type="text" name="nombre"/>

        <input type="submit" value="Guardar">
    </form>

</DIV> 

<!-- PIE DE PÁGINA y div contenedor-->
<?php include_once 'includes/pie.php'; ?>