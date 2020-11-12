<?php

$dwes = new mysqli('localhost','dwes','abc123.','dwes');
$consulta = $dwes->stmt_init();
$consulta->prepare('insert into tienda (cod, nombre, tlf) values(?,?,?)');

if(!$consulta->errno){
    $cod=4;
    $nombre='NuevaTienda';
    $tlf=690690690;
    $consulta->bind_param('isi', $cod,$nombre,$tlf);
    $consulta->execute();
}
$consulta->close();
$dwes->close();
        