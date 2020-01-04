<?php include_once 'includes/cabecera.php'; ?>
<?php include_once 'includes/redireccion.php'; ?>
<?php include_once 'includes/lateral.php'; ?>

<DIV id="principal">
    <hgroup class="hgroup">
        <h1>Crear Entradas</h1>    
        <h2> Añade nuevas entradas al blog para que los usuarios puedan leerlas</h2>
    </hgroup>
    
    <form action="guardar-entrada.php" method="POST" class="formCategoria">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo"/>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>
        
        <label for="descripcion">Descripción: </label>
        <textarea name="descripcion"></textarea>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : ''; ?>
        
        <label for="categoria">Categoría: </label>
        <select name="categoria">
            <?php 
                $categorias = conseguirCategorias($db);
                if(!empty($categorias)):
                while($categoria = mysqli_fetch_assoc($categorias)): 
            ?>
            <option value="<?=$categoria['n_id']?>">
                <?=$categoria['s_nombre']?>
            </option>
            <?php                
                endwhile;
                endif;
            ?>
        </select>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'categoria') : ''; ?>
        <input type="submit" value="Guardar">
    </form>
    
    <?php borrarErrores()?>
</DIV> 

<!-- PIE DE PÁGINA y div contenedor-->
<?php include_once 'includes/pie.php'; ?>