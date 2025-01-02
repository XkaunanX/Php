<?php
// Declaración de clases y objetos en PHP

class Persona {
    // Propiedades
    public $nombre;
    public $edad;

    // Constructor
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Método
    public function saludar() {
        return "Hola, mi nombre es " . $this->nombre . " y tengo " . $this->edad . " años.";
    }
}

// Crear un objeto
$persona = new Persona("Juan", 25);
echo $persona->saludar(); // Salida: Hola, mi nombre es Juan y tengo 25 años.
?>
