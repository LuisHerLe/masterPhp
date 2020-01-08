<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="assets/css/styles.css"/>
        <title>Tienda de camisetas</title>
    </head>
    <body>
        
        <div id="container">            
            <!--Cabecera-->
            <header id="header">
                <div id="logo">
                    <img src="assets/img/camiseta.png"/>
                    <a href="index.php">
                        Tienda de camisetas
                    </a>
                </div>
            </header>
            
            <!--Menu-->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="#">Inicio</a>
                    </li>
                    <li>
                        <a href="#">Categoría 1</a>
                    </li>
                    <li>
                        <a href="#">Categoría 2</a>
                    </li>
                    <li>
                        <a href="#">Categoría 3</a>
                    </li>
                    <li>
                        <a href="#">Categoría 4</a>
                    </li>
                    <li>
                        <a href="#">Categoría 5</a>
                    </li>
                </ul>

            </nav>

            <div id="content">
                
                <!--Barra lateral-->
                <aside id="lateral">
                    <div id="login" class="block_aside">
                        <h3>Entrar a la Web</h3>
                        <form action="#" method="POST">
                            <label for="email">Email</label>
                            <input type="email" name="email"/>
                            <label for="password">Contraseña</label>
                            <input type="password" name="password"/>
                            <input type="submit" value="Enviar"/>
                        </form>

                        <ul>                                                    
                            <li><a href="#">Mis Pedidos</a></li>
                            <li><a href="#">Gestionar Pedidos</a></li>
                            <li><a href="#">Gestionar Categorías</a></li>
                        </ul>
                    </div>

                </aside>
                
                <!--Contenido central-->
                <div id="central">
                    <h1>Productos destacados</h1>
                    <div class="product">
                        <img src="assets/img/camiseta.png"/>
                        <h2>Camiseta Azul Ancha</h2>
                        <p>30 Euros</p>
                        <a href="#" class="button">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/camiseta.png"/>
                        <h2>Camiseta Azul Ancha</h2>
                        <p>30 Euros</p>
                        <a href="#" class="button">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/camiseta.png"/>
                        <h2>Camiseta Azul Ancha</h2>
                        <p>30 Euros</p>
                        <a href="#" class="button">Comprar</a>
                    </div>

                </div>

            </div>

            <!--footer-->
            <footer id="footer">
                <p>Desarrollado por Luifo Web &copy;<?= date('Y') ?></p>
            </footer>
        </div>
    </body>
</html>
