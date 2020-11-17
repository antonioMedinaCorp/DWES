

<html>
    <head>

    </head>
    <body>
        <?php
        if (isset($_COOKIE['usuario'])) {
            
        } else {
            ?>

            <form name="datosAcceso" action="accesoConCheck2" method="POST">
                Nombre:
                <input type="text" name="usuario" placeholder="Introduzca nombre de usuario"><br>
                Contraseña:
                <input type="text" name="password" placeholder="Introduzca contraseña"><br>
                Recuérdame: 
                <input type="checkbox" name="recordar"><br>
                <input type="submit" name="enviar" value="Entrar">


            </form>
            <?php
        }
        ?> 
    </body>
</html>