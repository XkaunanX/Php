<?php
// Creación de excepciones personalizadas

// Definir una clase de excepción personalizada
class MiExcepcion extends Exception {
    public function errorMessage() {
        // Personalizar el mensaje de error
        return "Error en el archivo {$this->getFile()} en la línea {$this->getLine()}: {$this->getMessage()}";
    }
}

try {
    // Lanzamos una excepción personalizada
    throw new MiExcepcion("Algo salió mal!");
} catch (MiExcepcion $e) {
    // Manejamos la excepción personalizada
    echo $e->errorMessage();
}
?>
