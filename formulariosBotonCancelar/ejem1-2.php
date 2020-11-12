<?php
echo 'Nombre:';
echo $_POST['nombre'];
echo '<br>';
echo 'apellidos:';
echo $_POST['apellidos'];
echo '<br> Dirección:';
echo $_POST['direccion'];
echo '<br> Número de tarjeta:';
echo $_POST['nTarjeta'];
echo '<br>';
echo '';

?>
<form action="ejem1.php" method="POST">

    <input type="hidden" name="nombre" value="<?php echo $_POST['nombre'];?>">
    <input type="hidden" name="apellidos" value="<?php echo $_POST['apellidos'];?>" >
    <input type="submit" name="Cancelar" value="Cancelar">
</form>
<form action="ejem1.php" method="post">
    <input type="submit" name="Confirmar" value="Confirmar">
</form>