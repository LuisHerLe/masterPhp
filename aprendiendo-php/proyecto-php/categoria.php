<?php include_once 'includes/conexion.php'; ?>
<?php include_once 'includes/ayudas.php'; ?>
<?php
$categoriaActual = conseguirUnaCategoria($db, $_GET['id']);
if (!isset($categoriaActual['n_id'])) {
    header("Location: index.php");
}
?>

<?php include_once 'includes/cabecera.php'; ?>
<!-- MENU LATERAL y div contenedor-->

<?php include_once 'includes/lateral.php'; ?>
<!-- CAJA PRINCIPAL -->

<DIV id="principal">

    <h1>Entradas de <?= $categoriaActual['s_nombre'] ?></h1>

    <?php
    $entradas = conseguirEntradas($db, null, $_GET['id']);
    if (!empty($entradas) && mysqli_num_rows($entradas) > 0):
        while ($entrada = mysqli_fetch_assoc($entradas)):
            ?>       
            <ARTICLE class="entrada">
                <a href="entrada.php?id=<?=$entrada['n_id']?>">
                    <h2><?= $entrada['s_titulo']; ?></h2>
                    <span class="fecha"><?= $entrada['Categoría'] . ' | ' . $entrada['d_fecha']; ?></span>
                    <p>
                        <?= $entrada['s_descripcion'] ?>
                    </p>
                </a>
            </ARTICLE>
            <?php
        endwhile;
    else:
        ?>
        <div class="alerta">No hay categorías para mostrar</div>
    <?php endif; ?>
</DIV> <!-- Fin Principal --> 
<!-- PIE DE PÁGINA y div contenedor-->
<?php include_once 'includes/pie.php'; ?>
</BODY>
</HTML>