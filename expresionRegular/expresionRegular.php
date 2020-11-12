<html>
    <head>
        <title>Expresiones Regulares</title>
    </head>
    <body>

        <?php
        $isCorrect = true;
        if (isset($_POST['enviar'])) {
            if (!preg_match('/^[a-z]{1,30}$/i', $_POST['nombre'])) {
                $isCorrect = false;
                echo 'error nombre';
            }
            if (!preg_match('/^\d{8}[a-z]{1}$/i', $_POST['dni'])) {
                $isCorrect = false;
                echo 'error dni';
            }
            if (!preg_match('/^\d{2}-\d{2}-\d{4}$/', $_POST['fechaNac'])) {
                $isCorrect = false;
                echo 'echo fecha';
            }
            if (!preg_match('/^\d{1,2}$/', $_POST['edad'])) {
                if ($_POST['edad'] >= 18){
                    $isCorrect = false;
                    echo 'error edad';
                }
            }
            echo 'test';
        }

        if (isset($_POST['enviar']) && $isCorrect) {

            echo 'Nombre:';
            echo $_POST['nombre'];
            echo '<br>';
            echo 'DNI:';
            echo $_POST['dni'];
            echo '<br> Fecha de Nacimiento:';
            echo $_POST['fechaNac'];
            echo '<br> Edad:';
            echo $_POST['edad'];

        } else {
            if(!$isCorrect){
                echo '<br><strong>REVISA EL FORMULARIO</strong>';
            }
            ?>
            
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                Nombre: 
                <input type="text" name="nombre"><br><!-- comment -->
                DNI:
                <input type="text" name="dni"><br><!-- comment -->
                Fecha Nacimiento:
                <input type="text" name="fechaNac"><br>
                Edad:
                <input type="text" name="edad"><br>
                <input type="submit" name="enviar">

            </form>

            <?php
        }
        ?>


    </body>
</html>
