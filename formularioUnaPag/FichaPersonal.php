<html>
    <head>
        <title>Datos personales</title>
    </head>
    <body>
        <?php
        if (isset($_POST['enviar'])) {

            echo 'Nombre:';
            echo $_POST['nombre'];
            echo '<br>';
            echo 'apellidos:';
            echo $_POST['apellidos'];
            echo '<br> Numero matrícula:';
            echo $_POST['nMatricula'];
            echo '<br> Curso:';
            echo $_POST['curso'];
            echo '<br> Precio';
            echo $_POST['precio'];
            ?>


            <?php
        } else {
            if (!empty($_POST['nombre'])) {
                ?>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                    Sexo: <br>
                    <input type="radio" id="hombre" name="sexo" value="hombre">
                    <label for="hombre">Hombre</label><br>
                    <input type="radio" id="mujer" name="sexo" value="mujer">
                    <label for="mujer">Mujer</label><br><br>


                    Estado civil:<br>
                    <input type="radio"  id="soltero" name="eCivil" value="soltero"><!-- comment -->
                    <laber for="soltero">Soltero</laber><br><!-- comment -->
                    <input type="radio"  id="casado" name="eCivil" value="casado"><!-- comment -->
                    <laber for="casado">Casado</laber><br><!-- comment -->
                    <input type="radio"  id="divorciado" name="eCivil" value="divorciado"><!-- comment -->
                    <laber for="divorciado">Divorciado</laber><br><!-- comment -->

                    <input type="submit" name="enviar" value="Enviar"> 

                    <!<!-- valores hidden -->
                    <input type="hidden" name="nombre" value="<?php echo $_POST['nombre'] ?>">
                    <input type="hidden" name="apellidos" value="<?php echo $_POST['apellidos'] ?>" >
                    <input type="hidden" name="aficiones" value="<?php echo $_POST['aficiones[]'] ?>" >
                    <input type="hidden" name="estudios" value="<?php echo $_POST['estudios[]'] ?>" >



                </form>
                <?php
            } else {
                ?>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    Nombre:<br>
                    <input type="text" name="nombre"><br>

                    Apellidos:<br>
                    <input type="text" name="apellidos"><br>

                    Aficiones: <br>
                    <input type="checkbox" id="cine" name="aficiones[]" value="cine">
                    <label for="cine">Cine</label>
                    <input type="checkbox" id="lectura" name="aficiones[]" value="lectura">
                    <label for="lectura">Lectura</label>
                    <input type="checkbox" id="tv" name="aficiones[]" value="tv">
                    <label for="tv">TV</label><br>
                    <input type="checkbox" id="deporte" name="aficiones[]" value="deporte">
                    <label for="tv">Deporte</label>
                    <input type="checkbox" id="musica" name="aficiones[]" value="musica">
                    <label for="tv">Música</label><br><br><!-- comment -->

                    Estudios:<br>
                    <select multiple name="estudios[]" id="estudios" size="5">
                        <option value="eso">Eso</option>
                        <option value="bachillerato">Bachillerato</option>
                        <option value="CFGM">CFGM</option>
                        <option value="CFGS">CFGS</option>
                        <option value="universidad">Universidad</option>
                    </select>
                    <br>

                    <input type="submit" name="siguiente" value="Siguiente"> 



                </form>  


                <?php
            }
        }
        ?>
    </body>
</html>
