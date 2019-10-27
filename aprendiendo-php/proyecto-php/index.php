<!DOCTYPE html>
<HTML lang="es">
    <HEAD>
        <META charset="utf8"/>
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css"/>
        <TITLE>Blog de Videojuegos</TITLE>
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
                    <li>
                        <a href="index.php">Categoria 1</a>
                    </li>
                    <li>
                        <a href="index.php">Categoria 2</a>
                    </li>
                    <li>
                        <a href="index.php">Categoria 3</a>
                    </li>
                    <li>
                        <a href="index.php">Categoria 4</a>
                    </li>
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

        <!-- MENU LATERAL-->
        
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
                <FORM action="registro.php" method="POST">
                    <LABEL for="email">email</LABEL>
                    <INPUT type="email" name="email"/>
                    
                    <LABEL for="nombre">Nombre</LABEL>
                    <INPUT type="text" name="nombre"/>
                    
                    <LABEL for="apellidos">Apellidos</LABEL>
                    <INPUT type="text" name="apellidos"/>
                    
                    <LABEL for="password">Contraseña</LABEL>
                    <INPUT type="password" name="password"/>
                    
                    <INPUT type="submit" value="Registrar"/>
                </FORM>
            </DIV>
        </ASIDE>
        <!-- CAJA PRINCIPAL -->
        
        <DIV id="principal">
            <h1>Últimas entradas</h1>
            <ARTICLE class="entrada">
                <h2>Título de mi entrada</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic typesetting, 
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like 
                    Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </ARTICLE>
            
            <ARTICLE class="entrada">
                <h2>Título de mi entrada</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic typesetting, 
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like 
                    Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </ARTICLE>
            
            <ARTICLE class="entrada">
                <h2>Título de mi entrada</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic typesetting, 
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like 
                    Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </ARTICLE>
            <ARTICLE class="entrada">
                <h2>Título de mi entrada</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic typesetting, 
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like 
                    Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </ARTICLE>
          
        </DIV>
        
        </DIV> 
        
        <!-- PIE DE PÁGINA -->
        <FOOTER id="pie">
            <p>
                Desarrollado por Luis Herández &copy; 2019
            </p>
        </FOOTER>
    </BODY>
</HTML>