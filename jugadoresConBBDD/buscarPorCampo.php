<html>
    <head>
        <title>Mostrar</title>
    </head>
    <body>
        <h3>Buscar jugador</h3>
        <?php
        if (isset($_POST['buscar'])) {
            ?>

            <table>
                <tr>
                    <td>Nombre</td>
                    <td>DNI</td>
                    <td>Dorsal</td>
                    <td>Posición</td>
                    <td>Equipo</td>
                    <td>Goles</td>
                </tr>
                <?php
                require 'funciones.php';

                $jugadores = getJugador($_POST['campo'], $_POST['info']);

                if (!$conex->errno) {
                    if ($jugadores->num_rows) {
                        while ($fila = $jugadores->fetch_array()) {
                            echo '<tr>';
                            echo '<td>' . $fila['nombre'] . '</td>';
                            echo '<td>' . $fila['dni'] . '</td>';
                            echo '<td>' . $fila['dorsal'] . '</td>';
                            echo '<td>' . $fila['posicion'];
                            echo '</td>';
                            echo '<td>' . $fila['equipo'] . '</td>';
                            echo '<td>' . $fila['goles'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'No hay datos en la BBDD';
                    }
                }
                ?>
            </table>
            <?php
        } else {
            ?>

            <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <select name = "campo">
                    <option value = "dni">DNI</option>
                    <option value = "equipo">Equipo</option>
                    <option value = "posicion">Posición</option>
                </select>
                <br><br>

                <label for="info">Introduzca info a mostrar</label><br>
                <input type="text" name="info" id="info">

                <input type="submit" name="buscar" value="Buscar">
            </form>

            <?php
        }
        ?>

    </body>
</html>
