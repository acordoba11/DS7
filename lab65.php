<?php

class ClaseBase {
    public function test() {
        echo "ClaseBase::test() llamada\n";
    }
    final public function masTests() {
        echo "ClaseBase::masTests() llamada\n";
    } 
}

class ClaseHijo extends ClaseBase {
    public function masTests() {
        echo "ClaseHijo::masTests() llamada\n";
    } 
}

// Fatal error: Cannot override final method ClaseBase::masTests() in C:\xampp\htdocs\ds7\lab6\lab65.php on line 13

//Explicación: ClaseHijo declara un método llamado masTests. El problema es que la ClaseBase, desde la cual ClaseHijo hereda, ya contiene un método con el mismo nombre, por lo que sería una sobrescritura del método. El error se produce porque la función masTests de la ClaseBase tiene el identificador "final" lo cual indica que no puede ser sobrescrito en ninguna clase que herede de ella.

?>