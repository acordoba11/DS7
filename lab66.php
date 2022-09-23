<?php

final class ClaseBase {
    public function test() {
        echo "ClaseBase::test() llamada\n";
    }
    // Aquí da igual si se declara el método como final o no
    final public function moreTesting() {
        echo "ClaseBase::moreTesting() llamada\n";
    } 
}

class ClaseHijo extends ClaseBase {}

// Fatal error: Class ClaseHijo may not inherit from final class (ClaseBase) in C:\xampp\htdocs\ds7\lab6\lab66.php on line 13

// Explicación: la ClaseHijo declara que hereda de la ClaseBase, pero la ClaseBase tiene el identificador "final" que indica que no se puede heredar de ella, es estéril.

?>