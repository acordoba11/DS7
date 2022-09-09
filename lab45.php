<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 4.5</title>
</head>
<body>

    <?php

    if(array_key_exists('enviar', $_POST)) {
        echo "<table border=1>";
        for($i = 1; $i <= $_REQUEST['numero']; $i++) {
            echo "<tr>";
            for($j = 1; $j <= $_REQUEST['numero']; $j++) {
                $valor = 0;
                if($i == $j) {
                    $valor = 1;
                }
                echo "<td>$valor</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        ?>

        <form action="lab45.php" method="post">
            Matriz de orden: <input type="number" name="numero">
            <input type="submit" name="enviar" value="Generar">
        </form>

        <?php
    }
    
    ?>

</body>
</html>