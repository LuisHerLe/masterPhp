<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<div id="principal">
    <h1>Mis Datos</h1> 
    <?php if (isset($_SESSION['completado'])): ?>
        <div class="alerta alerta-exito">
            <?= $_SESSION['completado'] ?>
        </div>
    <?php elseif (isset($_SESSION['errores']['general'])): ?>
        <div class="alerta alerta-error">
            <?= $_SESSION['errores']['general'] ?>
        </div>
    <?php endif; ?>
    <FORM action="actualizarDatos.php" method="POST">
        <LABEL for="email">email</LABEL>
        <INPUT type="email" name="email" placeholder="<?= $_SESSION['usuario']['s_email']; ?>"/>
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>

        <LABEL for="nombre">Nombre</LABEL>
        <INPUT type="text" name="nombre" placeholder="<?= $_SESSION['usuario']['s_nombre']; ?>"/>
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

        <LABEL for="apellidos">Apellidos</LABEL>
        <INPUT type="text" name="apellidos" placeholder="<?= $_SESSION['usuario']['s_apellidos']; ?>"/>
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>            

        <INPUT type="submit" name="submit" value="Actualizar"/>
    </FORM>
    <?php borrarErrores() ?>

</div>
<?php include_once 'includes/pie.php'; ?>