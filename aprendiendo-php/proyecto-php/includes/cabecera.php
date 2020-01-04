<?php
/* Include del head */
require_once 'includes/conexion.php';
?>
<?php require_once 'includes/ayudas.php'; ?>

<!DOCTYPE html>
<HTML lang="es">
    <HEAD>
        <META charset="utf8"/>
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css"/>
        <TITLE>Blog de Videojuegos</TITLE>
    <time datetime="13-11-2019T19:50:00"></time>
</HEAD>
<BODY>
    <!-- CABECERA -->
    <HEADER id="cabecera">
        <!-- Logo-->
        <DIV id="logo">
            <a href="index.php">
                Blog de Videojuegos
            </a>
        </DIV>

        <!-- MENU-->
        <NAV id="menu">
            <UL>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <?php
                $categorias = conseguirCategorias($db);
                if(!empty($categorias)):
                    while ($categoria = mysqli_fetch_assoc($categorias)):
                ?>
                        <li>
                            <a href = "categoria.php?id=<?= $categoria['n_id'] ?>"><?= $categoria['s_nombre'] ?></a>
                        </li>

                <?php
                    endwhile;
                    endif;
                ?>
                <li>
                    <a href="index.php">Sobre mi</a>
                </li>
                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </UL>   
        </NAV>

        <DIV class="clearfix"></DIV>
    </HEADER>  

    <DIV id="contenedor">