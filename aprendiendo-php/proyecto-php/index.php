<?php
/* Se incluye el head */
include_once 'includes/cabecera.php';
?>
<!-- MENU LATERAL y div contenedor-->

<?php include_once 'includes/lateral.php'; ?>
<!-- CAJA PRINCIPAL -->

<DIV id="principal">
    <h1>Últimas entradas</h1>

    <?php
    $entradas = conseguirEntradas($db, true);
    if (!empty($entradas)):
        while($entrada = mysqli_fetch_assoc($entradas)):
            ?>       
            <ARTICLE class="entrada">
                <a href="entrada.php?id=<?=$entrada['n_id']?>">
                    <h2><?=$entrada['s_titulo'];?></h2>
                    <span class="fecha"><?=$entrada['Categoría'].' | '.$entrada['d_fecha']; ?></span>
                    <p>
                        <?= substr($entrada['s_descripcion'], 0, 180). "..."?>
                    </p>
                </a>
            </ARTICLE>
            <?php
        endwhile;

    endif;
    ?>
    <DIV id="ver-todas">
        <a href="entradas.php">Ver todas las entradas</a>
    </DIV>

</DIV> <!-- Fin Principal --> 
<!-- PIE DE PÁGINA y div contenedor-->
<?php include_once 'includes/pie.php'; ?>
</BODY>
</HTML>