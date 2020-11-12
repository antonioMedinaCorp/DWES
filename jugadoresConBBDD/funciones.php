<?php

$conex = new mysqli('localhost', 'dwes', 'abc123.', 'dwes');

function setJugador($nombre, $dni, $dorsal, $posicion, $equipo, $goles) {
    $conex = new mysqli('localhost', 'dwes', 'abc123.', 'dwes');
    $conex->errno;
    $result = $conex->query("insert into jugador (nombre, dni, dorsal, posicion, equipo, goles) values ('$nombre','$dni','$dorsal','$posicion','$equipo','$goles')");
    echo $conex->error;
    if ($result) {
        echo 'Exito';
    } else {
        echo ' Consulta ha Fallo';
    }
    $conex->close();
}

function getAllJugadores() {
    $conex = new mysqli('localhost', 'dwes', 'abc123.', 'dwes');

    $result = $conex->query('select * from jugador');
    return $result;
}

function getJugador($campo, $info) {
    $conex = new mysqli('localhost', 'dwes', 'abc123.', 'dwes');
    echo "select * from jugador where '$campo' like '$info'";
    $result = $conex->query("select * from jugador where $campo like '%$info%' ");
    $conex->error;
    return $result;
}

function isJugador($dni) {
    $conex = new mysqli('localhost', 'dwes', 'abc123.', 'dwes');

    $result = $conex->query("select * from jugador where dni like '%$dni%' ");
    $conex->error;
    if (!empty($result)) {
        return $result;
    } else {
        return null;
    }
}

function setOrCreateJugador($nombre, $dni, $dorsal, $posicion, $equipo, $goles) {
    if (isJugador($dni) == null) {
        setJugador($nombre, $dni, $dorsal, $posicion, $equipo, $goles);
        return 1;
    } else {

        $conex = new mysqli('localhost', 'dwes', 'abc123.', 'dwes');

        $result=$conex->prepare("UPDATE jugador SET nombre = ?, dorsal = ?, posicion = ?, equipo = ?, numGoles = ? where dni = '$dni'");
        $result->bind_param('sissi', $nombre, $dorsal, $posicion, $equipo, $goles);
        $result->execute();
        $result->error;
        return 2;
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

