<?php
/* Se incluye el head */
include_once 'includes/cabecera.php';
?>
<!-- MENU LATERAL y div contenedor-->

<?php include_once 'includes/lateral.php'; ?>
<!-- CAJA PRINCIPAL -->

<DIV id="principal">
    <h1>Todas las entradas</h1>

    <?php
    $entradas = conseguirEntradas($db);
    if (!empty($entradas)):
        while($entrada = mysqli_fetch_assoc($entradas)):
            ?>       
            <ARTICLE class="entrada">
                <a href="entrada.php?id=<?=$entrada['id']?>">
                    <h2><?=$entrada['s_titulo'];?></h2>
                    <span class="fecha"><?=$entrada['Categoría'].' | '.$entrada['d_fecha']; ?></span>
                    <p>
                        <?= $entrada['s_descripcion']?>
                    </p>
                </a>
            </ARTICLE>
            <?php
        endwhile;

    endif;
    ?>

</DIV> <!-- Fin Principal --> 
<!-- PIE DE PÁGINA y div contenedor-->
<?php include_once 'includes/pie.php'; ?>
</BODY>
</HTML>