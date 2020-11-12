<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <table>
            <?php
            $equipo = array("nuria", "ana", "fran", "arturo");
            echo 'Actual: ';
            echo current($equipo);
            echo '<br>';
            echo 'Siguiente: ';
            echo next($equipo);
            echo '<br>';
            echo 'Actual despues de salto: ';
            echo current($equipo);
            echo '<br>';
            echo 'Anterior: ';
            echo prev($equipo);
            echo '<br>';
            
            echo 'Indice actual: ';
            print_r( each($equipo));
            echo '<br>';
            
            echo 'Principio: ';
            echo reset($equipo);
            echo '<br>';
            
            echo 'Final: ';
            echo end($equipo);
            
            ?>

        </table>
    </body>
</html>
