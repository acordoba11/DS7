<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 4.3</title>
</head>
<body>
    <?php

        $numeros = array();
        for($i=0; $i<=19; $i++) {
            $nvoNum = generarRandom();
            while(in_array($nvoNum, $numeros)) {
                $nvoNum = generarRandom();
            }
            array_push($numeros, $nvoNum);
        }

        $mayor = 0;

        echo "<br> Mostrando arreglo:<br>";
        foreach($numeros as $numero) {
            echo "<br> $numero";
            if($numero > $mayor) {
                $mayor = $numero;
            }
        }

        echo "<br><br>El mayor de los números es: $mayor <br>";

        function generarRandom() {
            return rand(0,100);
        }

    ?>
</body>
</html>