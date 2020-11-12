<html>
    <head>
        <title>Introducir datos</title>
    </head>
    <body>

        <?php
        if(isset($_POST['enviar'])){
            require 'funciones.php';
            $pos = 0;
            
            foreach ($_POST['posicion'] as $value) {
                $pos += $value;
            }
            setJugador($_POST['nombre'],$_POST['dni'], $_POST['dorsal'], $pos, $_POST['equipo'], $_POST['goles']);
            
        ?>
        <h2>Jugador introducido</h2>
            <?php
        }
        else {
        ?>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                Nombre: <input type="text" name="nombre"><br>
                DNI: <input type="text" name="dni"><br>
                Dorsal:
                <select name="dorsal">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                </select><br>
                Posicion:
                <select multiple size="4" name="posicion[]">
                    <option value="1">Portero</option>
                    <option value="2">Defensa</option>
                    <option value="4">Centro</option>
                    <option value="8">Delantero</option>

                </select><br>
                Equipo: <input type="text" name="equipo"><br>
                Nº Goles: <input type="number" name="goles"><br>

                <input type="submit" name="enviar" value="Enviar">
            </form>
        <form action="index.php">
            <button type="submit">Volver</button>
            
        </form>

        <?php
        }
        ?>



    </body>
</html>


