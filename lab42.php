<?php

$numero = $_POST['numero'];

echo "<br>El factorial de $numero es: ", factorial($numero),"<br>";

function factorial($numero) {
    if($numero == 1) {
        return $numero;
    } elseif($numero > 1) {
        $resultado = 1;
        for($i = 2; $i <= $numero; $i++) {
            $resultado = $resultado * ($i);
        }
        return $resultado;
    }
    return "Numero invalido.";
}

?>