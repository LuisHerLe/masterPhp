<?php require_once 'includes/ayudas.php'; ?>

<ASIDE id="sidebar">
    <DIV id="login" class="bloque">
        <h3>Identifícate</h3>
        <FORM action="login.php" method="POST">
            <LABEL for="email">email</LABEL>
            <INPUT type="email" name="email"/>

            <LABEL for="password">Contraseña</LABEL>
            <INPUT type="password" name="password"/>

            <INPUT type="submit" value="Entrar"/>
        </FORM>
    </DIV>

    <DIV id="register" class="bloque">

        <h3>Regístrate</h3>

         <!--Mostrar errores--> 
        <?php if (isset($_SESSION['completado'])): ?>
            <div class="alerta alerta-exito">
                <?= $_SESSION['completado'] ?>
            </div>
        <?php elseif(isset($_SESSION['errores']['general'])): ?>
        <div class="alerta alerta-error">
            <?=$_SESSION['errores']['general']?>
        </div>
        <?php endif; ?>

        <FORM action="registro.php" method="POST">
            <LABEL for="email">email</LABEL>
            <INPUT type="email" name="email"/>

            <LABEL for="nombre">Nombre</LABEL>
            <INPUT type="text" name="nombre"/>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

            <LABEL for="apellidos">Apellidos</LABEL>
            <INPUT type="text" name="apellidos"/>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>            

            <LABEL for="password">Contraseña</LABEL>
            <INPUT type="password" name="password"/>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>            

            <INPUT type="submit" name="submit" value="Registrar"/>
        </FORM>
        <?php echo borrarErrores(); ?>
    </DIV>
</ASIDE>

