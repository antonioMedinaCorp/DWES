
<?php
if(isset($_POST['Siguiente'])){
?>
<form action="ejem1-2.php" method="POST">
    PEDIDO:<br><br>
    Dirección:<br><!-- comment -->
    <input type="text" name="direccion"><!-- comment -->
    <br><!-- comment -->
    Nº de tarjeta:<br><!-- comment -->
    <input type="text" name="nTarjeta"><br><!-- comment -->
    <input type="submit" name="Siguiente" value="Siguiente">
    <input type="hidden" name="nombre" value="<?php echo $_POST['nombre']?>">
    <input type="hidden" name="apellidos" value="<?php echo $_POST['apellidos']?>" >

    
    </form>
    

<?php
}
else{
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        DATOS:<br><br>
    Nombre:<br><!-- comment -->
    <input type="text" name="nombre" value="<?php
        if(isset($_POST['Cancelar'])){
            echo $_POST['nombre'];
        }
    ?>"><!-- comment -->
    <br><!-- comment -->
    Apellidos:<br><!-- comment -->
    <input type="text" name="apellidos" value="<?php
        if(isset($_POST['Cancelar'])){
            echo $_POST['apellidos'];
        }
    ?>">
    
    <input type="submit" name="Siguiente" value="Enviar">
</form>
<?php
}
?>

