<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 3.2</title>
</head>
<body>

    <?php

    if(array_key_exists('enviar', $_POST)) {
        if($_REQUEST['apellido'] != "") {
            echo "El apellido ingresado es: $_REQUEST[apellido]";
        } else {
            echo "Favor coloque el apellido";
        }
        echo "<br>";
        if($_REQUEST['nombre'] != "") {
            echo "El nombre ingresado es: $_REQUEST[nombre]";
        } else {
            echo "Favor coloque el nombre";
        }
    } else {
        ?>

        <form action="lab33.php" method="post">
            Nombre: <input type="text" name="nombre">
            Apellido: <input type="text" name="apellido">
            <input type="submit" name="enviar" value="Enviar datos">
        </form>

        <?php
    }

    ?>

</body>
</html>