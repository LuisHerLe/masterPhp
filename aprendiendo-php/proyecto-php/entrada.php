<?php include_once 'includes/conexion.php'; ?>
<?php include_once 'includes/ayudas.php'; ?>
<?php
$entradaActual = conseguirEntrada($db, $_GET['id']);

if (!isset($entradaActual['n_id'])) {
    header("Location: index.php");
}
?>

<?php include_once 'includes/cabecera.php'; ?>
<!-- MENU LATERAL y div contenedor-->
<?php include_once 'includes/lateral.php'; ?>
<!-- CAJA PRINCIPAL -->

<DIV id="principal">
    <hgroup>
        <h1><?= $entradaActual['s_titulo'] ?></h1>
        <a href="categoria.php?id=<?= $entradaActual['n_categoria_id'] ?>">
            <h2><?= $entradaActual['Categoría'] ?></h2>
            <a/>
            <h4><?= $entradaActual['d_fecha'] ?> | <?=$entradaActual['usuario']?> </h4>
    </hgroup>
    <p><?= $entradaActual['s_descripcion'] ?></p>
    
    
    <?php if (isset($_SESSION['usuario']) && $_SESSION['usuario']['n_id'] == $entradaActual['n_usuario_id']): ?>
     <!-- Fin Principal --> 
    <!-- PIE DE PÁGINA y div contenedor-->
    <br/>
    <a href="editarEntrada.php?id=<?=$_GET['id']?>" class="boton boton-verde">Editar entrada</a>
    <a href="eliminarEntrada.php?id=<?=$_GET['id']?>" class="boton">Eliminar entrada</a>
   </DIV> 
    
<?php endif; ?>
    
    <?php include_once 'includes/pie.php'; ?>
</BODY>
</HTML>