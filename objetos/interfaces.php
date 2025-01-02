<?php
// Uso de interfaces en PHP

interface Animal {
    public function hacerSonido();
}

class Gato implements Animal {
    public function hacerSonido() {
        return "El gato maúlla.";
    }
}

$gato = new Gato();
echo $gato->hacerSonido(); // Salida: El gato maúlla.
?>
