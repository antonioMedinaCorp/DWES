<html>
    <head>
        <title>title</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <table>
            <?php
            $matriz['Fil1']['Col1'] = "123";
            $matriz['Fil1']['Col2'] = "123";
            $matriz['Fil1']['Col3'] = "123";
            $matriz['Fil2']['Col1'] = "123";
            $matriz['Fil2']['Col2'] = "123";
            $matriz['Fil2']['Col3'] = "123";
            $matriz['Fil3']['Col1'] = "123";
            $matriz['Fil3']['Col2'] = "124";
            $matriz['Fil3']['Col3'] = "125";

            foreach ($matriz as $key => $value) {
                echo '<tr>';
                foreach ($matriz[$key] as $key => $value) {
                    echo '<td>' . $value . '</td>';
                }
            }
            ?>

        </table>
    </body>
</html>


