

<ASIDE id="sidebar">
    
    <DIV id="buscador" class="bloque">
        <h3>Buscar</h3>
   
        <FORM action="buscar.php" method="POST">
            <INPUT type="text" name="busqueda"/>

            <INPUT type="submit" value="Buscar"/>
        </FORM>
    </DIV>

    <!--Div que solo se muestra cuando se esté logueado-->
    <?php if (isset($_SESSION['usuario'])): ?>
        <div id= "usuario-loqueado" class="bloque">
            <h3>Bienvenido <?= $_SESSION['usuario']['s_nombre'] . ' ' . $_SESSION['usuario']['s_apellidos']; ?> </h3>
            <!--Botones-->
            <a href="crearEntradas.php" class="boton boton-verde">Crear entradas</a>
            <a href="crearCategoria.php" class="boton">Crear categoría</a>
            <a href="misDatos.php" class="boton boton-naranja">Mis datos</a>
            <a href="cerrar.php" class="boton boton-rojo">Cerrar Sesión</a>
            
        </div>
    <?php endif; ?>

    <?php if (!isset($_SESSION['usuario'])): ?>
    
    <DIV id="login" class="bloque">
        <h3>Identifícate</h3>
        <?php if (isset($_SESSION['error_login'])): ?>
            <div id= "usuario-error" class="alerta alerta-error">
                <h5><?= $_SESSION['error_login'] ?></h5>
            </div>
        <?php endif; ?>

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
        <?php elseif (isset($_SESSION['errores']['general'])): ?>
            <div class="alerta alerta-error">
                <?= $_SESSION['errores']['general'] ?>
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
    <?php endif;?>
</ASIDE>

