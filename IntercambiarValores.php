<html>
    <head>
        <title>title</title>
    </head>
    <body>
        
        <?php
            $a = 5;
            $b = 3;
            $c = 8;
            
            function cambioValores(&$a, &$b, &$c){
                $aux = $c;
                $c = $b;
                $b = $a;
                $a = $aux;
            }
            cambioValores($a, $b, $c);
            echo ('valor de a '.$a);
            echo ('valor de b '.$b);
            echo ('valor de c '.$c);
        ?>

    </body>
</html>

