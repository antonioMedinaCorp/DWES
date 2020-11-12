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
            foreach ($_SERVER as $key => $value) {
                echo '<tr>';
                echo '<td>' . $key . '</td>';
                echo '<td>' . $value . '</td>';
                echo '</tr>';
            }
            ?>
        </table>

    </body>
</html>
