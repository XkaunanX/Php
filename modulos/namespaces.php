<?php
// Uso de namespaces en PHP

// Definición de un namespace
namespace MiNamespace;

class MiClase {
    public function saludar() {
        return "¡Hola desde MiNamespace!";
    }
}

// Uso de la clase con namespace
$obj = new MiNamespace\MiClase();
echo $obj->saludar(); // Salida: ¡Hola desde MiNamespace!
?>
