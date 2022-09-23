<?php

include("class_lib.php");

// Instanciación de objetos clientes
$cliente1 = new cliente('Juan', 123);
$cliente2 = new cliente('Sergio', 456);

// Mostramos el número de cada cliente creado
echo "<br>El identificador del cliente 1 es: " . $cliente1->numero;
echo "<br>El identificador del cliente 2 es: " . $cliente2->numero;

?>