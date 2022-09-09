<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 4.4</title>
</head>
<body>

    <?php

    $arreglo = array();

    if(array_key_exists('enviar', $_POST)) {
        $numero = $_REQUEST['numero'];
        if($numero % 2 == 0) {
            array_push($arreglo, $numero);

            if(count($arreglo) == 5) {
                foreach($arreglo as $valor) {
                    echo "<br>$valor<br>";
                }
            }
        }
    } else {
        ?>

        <form action="lab44.php" method="post">
            Ingrese un número par: <input type="number" name="numero">
            <input type="submit" name="enviar" value="Agregar">
        </form>

        <?php
    }

    ?>

</body>
</html>