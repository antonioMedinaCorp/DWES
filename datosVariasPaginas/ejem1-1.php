<form action="ejem1-2.php" method="POST">
    Nº Matrícula: <br><!-- comment -->
    <input type="text" name="nMatricula"><br><!-- comment -->
    Curso:<br><!-- comment -->
    <input type="text" name="curso"><br><!-- comment -->
    Precio:<br><!-- comment -->
    <input type="text" name="precio"><br><!-- comment -->
    <input type="hidden" name="nombre" value="<?php echo $_POST['nombre']?>">
    <input type="hidden" name="apellidos" value="<?php echo $_POST['apellidos']?>" >
        <input type="submit" name="enviar" value="Enviar">

</form>