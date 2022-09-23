<?php

class cliente {
    var $nombre;
    var $numero;
    var $peliculas_alquiladas;

    function __construct($nombre, $numero) {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->peliculas_alquiladas = array();
    }

    function __destruct() {
        echo "<br>destruido: " . $this->nombre;
    }

    function dame_numero() {
        return $this->numero;
    }
}

// Instanciación de objetos clientes
$cliente1 = new cliente('Pepe', 1);
$cliente2 = new cliente('Roberto', 564);

// Mostramos el número de cada cliente creado
echo "<br>El identificador del cliente 1 es: " . $cliente1->numero;
echo "<br>El identificador del cliente 2 es: " . $cliente2->numero;

?>