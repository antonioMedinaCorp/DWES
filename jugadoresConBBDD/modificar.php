<?php
if (isset($_POST['enviar'])) {
    require 'funciones.php';
    $pos = 0;

    foreach ($_POST['posicion'] as $value) {
        $pos += $value;
    }
    $resultado = setOrCreateJugador($_POST['nombre'], $_POST['dni'], $_POST['dorsal'], $pos, $_POST['equipo'], $_POST['goles']);

    if ($resultado == 1) {
        echo '<h2>Nuevo jugador introducido</h2> ';
    } else {
        echo '<h2>Jugador modificado</h2>';
    }
    ?>
    <h2>Jugador introducido</h2>
    <?php
} else {
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        Nombre: <input type="text" name="nombre"><br>
        DNI: <input type="text" name="dni"><br>
        Dorsal:
        <select name="dorsal">
    <?php
    for ($i = 0; $i <= 10; $i++) {
        echo '<option value="' . ($i + 1) . '">' . ($i + 1) . ' </option>';
    }
    ?>

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