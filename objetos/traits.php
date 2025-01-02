<?php
// Uso de traits en PHP

trait Saludar {
    public function saludar() {
        return "¡Hola!";
    }
}

class Persona {
    use Saludar;
}

$persona = new Persona();
echo $persona->saludar(); // Salida: ¡Hola!
?>
