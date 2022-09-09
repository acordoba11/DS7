<?php

echo "El indicador es <br>";

$numero = $_POST['numero'];
if($numero != "") {
    $img1 = "<img src=";
    $img2 = "<img src=\"";

    if($numero >= 80) {
        echo "<img src=\"img/lab41_verde.jpg\">";
    } elseif($numero >= 50) {
        echo "<img src=\"img/lab41_amarillo.jpg\">";
    } else {
        echo "<img src=\"img/lab41_rojo.jpg\">";
    }
}

?>