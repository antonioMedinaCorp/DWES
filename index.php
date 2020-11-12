<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Practica 1</title>
    </head>
    <body>
 
        <?php
        
        switch (date('N')) {
    case 1:
        echo "Lunes, ";
        break;
    case 2:
        echo "Martes, ";
        break;
    case 3:
        echo "Miercoles, ";
        break;
    case 4:
        echo "Jueves, ";
        break;
    case 5:
        echo "Viernes, ";
        break;
    case 6:
        echo "Sábado, ";
        break;
    case 7:
        echo "Domingo, ";
        break;
}

    echo date('d \d\e ');
        
        switch (date('n')) {
    case 1:
        echo "Enero";
        break;
    case 2:
        echo "Febrero";
        break;
    case 3:
        echo "Marzo";
        break;
    case 4:
        echo "Abril";
        break;
    case 5:
        echo "Mayo";
        break;
    case 6:
        echo "Junio";
        break;
    case 7:
        echo "Julio";
        break;
    case 8:
        echo "Agosto";
        break;
    case 9:
        echo "Septiembre";
        break;
    case 10:
        echo "Octubre";
        break;
    case 11:
        echo "Noviembre";
        break;
    case 12:
        echo "Diciembre";
        break;
}

        echo date(' \d\e Y');
        ?>
    </body>
</html>
