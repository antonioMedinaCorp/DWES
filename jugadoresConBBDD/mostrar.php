<html>
    <head>
        <title>Mostrar</title>
    </head>
    <body>
        <h3>Jugadores</h3>
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

            $jugadores = getAllJugadores();

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
    </body>
</html>
