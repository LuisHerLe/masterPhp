<?php include_once 'includes/conexion.php'; ?>
<?php include_once 'includes/ayudas.php'; ?>
<?php include_once 'includes/redireccion.php';?>


<?php
$entradaActual = conseguirEntrada($db, $_GET['id']);

if (!isset($entradaActual['n_id'])) {
    header("Location: index.php");
}

?>

<?php include_once 'includes/cabecera.php'; ?>
<!-- MENU LATERAL y div contenedor-->
<?php include_once 'includes/lateral.php'; ?>

<DIV id="principal">
    <hgroup class="hgroup">
        <h1>Editar Entrada</h1>    
        <h2> Edita tu entrada: <strong><?=$entradaActual['s_titulo']?></strong></h2>
    </hgroup>

    <form action="guardar-entrada.php?editar=<?=$entradaActual['n_id']?>" method="POST" class="formCategoria">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" placeholder="<?=$entradaActual['s_titulo']?>"/>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>
        
        <label for="descripcion">Descripción: </label>
        <textarea name="descripcion" placeholder="<?=$entradaActual['s_descripcion']?>"></textarea>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : ''; ?>
        
        <label for="categoria">Categoría: </label>
        <select name="categoria">
            <?php 
                $categorias = conseguirCategorias($db);
                if(!empty($categorias)):
                while($categoria = mysqli_fetch_assoc($categorias)): 
                    
            ?>
            
            <option value="<?=$categoria['n_id']?>" 
                    <?=($categoria['n_id'] == $entradaActual['n_categoria_id']) ? 'selected="selected"' : ''?> >
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
    <?php include_once 'includes/pie.php'; ?>
</BODY>
</HTML>