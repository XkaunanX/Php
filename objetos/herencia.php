<?php
// Herencia en PHP

class Animal {
    public $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function hacerSonido() {
        return "El animal hace un sonido.";
    }
}

class Perro extends Animal {
    public function hacerSonido() {
        return "El perro ladra.";
    }
}

$perro = new Perro("Fido");
echo $perro->hacerSonido(); // Salida: El perro ladra.
?>
