<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Formularios</title>
    </head>
    <body>
        <div>
            <h1>Formulario</h1>
             <!--enctype multipart/form-data para envío de archivos-->
            <form action="" method="POST" enctype="multipart/form-data">
                <div>
                    <p>
                        <!--Input con mínimo 3 caracteres y que solo se puedan ingresar letras en mayúscula-->
                        <label for="nombre">Nombre: </label>
                        <input type="text" name="nombre" autofocus="autofocus" minlength="3" pattern="[A-Z]+" required=""/>
                    </p>
                </div>
                <div>
                    <p>
                        <label for="apellido">Apellido: </label>
                        <input type="text" name="apellido" maxlength="15"/>
                    </p>
                </div>
                
                <div>
                    <p>
                        <label for="boton">Botón</label>
                        <input type="button" value="Click"/>
                    </p>
                </div>
                <div>
                    <label for="sexo">Sexo:</label>
                    <p>
                    <p><label>Masculino</label><input type="checkbox" name="sexo" value="Masculino" checked="checked"></p>
                        <p><label>Femenino</label><input type="checkbox" name="sexo" value="Femenino"></p>
                    </p>
                </div> 
                <div>
                    <p>
                        <label for="color">Color:</label>
                        <input type="color" name="color"/>
                    </p>
                </div> 
                <div>
                    <p>
                        <label for="fecha">Fecha:</label>
                        <input type="date" name="fecha"/>
                    </p>
                </div> 
                <div>
                    <p>
                        <label for="email">Correo:</label>
                        <input type="email" name="email"/>
                    </p>
                </div>
                <div>
                    <p>
                        <label for="archivo">Archivo:</label>
                        <input type="file" name="archivo" multiple="multiple"/>
                    </p>
                </div>
                <div>
                    <p>
                        <label for="number">Código:</label>
                        <input type="number" name="number"/>
                    </p>
                </div> 
                <div>
                    <p>
                        <label for="password">Contraseña:</label>
                        <input type="password" name="password"/>
                    </p>
                </div> 
                <div>
                    <p>
                        <label for="continente">Continente:</label>
                        Sur América <input type="radio" name="continente" value="Sur América"/>
                        Europa <input type="radio" name="continente" value="Europa"/>
                    </p>
                </div>  
                <div>
                    <p>
                        <label for="telefono">Teléfono:</label>                        
                        <input type="tel" name="telefono"/>
                    </p>
                </div>   
                <div>
                    <p>
                        <label for="web">URL:</label>                        
                        <input type="url" name="web"/>
                    </p>
                </div>                
                <div>
                    <p>
                        <input type="submit" value="Enviar"/>
                    </p>
                </div>
            </form>
        </div>
    </body>
</html>    
<?php

/* 
 * Permite al usuario ingresar información y enviarlo al servidor
 */


