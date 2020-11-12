<html>
    <head>
        <title>Agenda</title>
    </head>
    <body>

        <?php
        if (!empty($_POST['guardar'])) {

            $agenda = (array) json_decode($_POST['agenda'], true);


            //Modificar o añadir registros
            if (!empty($_POST['nombre']) && !empty($_POST['telefono'])) {
                if (array_key_exists($_POST['nombre'], $agenda) ) {
                    echo 'Registro modificado';
                } else {
                    echo 'Registro añadido';
                }
                $agenda[$_POST['nombre']] = $_POST['telefono'];
            }

            if (!empty($_POST['nombre']) && empty($_POST['telefono'])) {
                if (array_key_exists($_POST['nombre'], $agenda)) {
                   // unset($agenda[$_POST['nombre']]);
                    echo 'Registro eliminado';
                } else {
                    echo 'No existe registro';
                }
            }
        } else {
            $agenda = array();
        }
        ?>


        <h2>Agenda</h2>

        <table>
            <thead>
                <tr>
                    <td>Nombre</td>
                    <td>Teléfono</td>
                </tr>
            </thead>
            <tbody>
<?php

    foreach ($agenda as $key => $value) {
        echo '<tr>';
        echo '<td>' . $key . '</td>';
        echo '<td>' . $value . '</td>';
        echo '</tr>';
    }

?>
            </tbody>
        </table>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            Nombre:<br>
            <input type="text" name="nombre"><br>
            Número:<br>
            <input type="text" name="telefono"><br>

            <input type="hidden" name="agenda" value='<?php echo json_encode($agenda) ?>'>


            <input type="submit" name="guardar" value="Guardar"> 


        </form>
    </body>
</html>


