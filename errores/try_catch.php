<?php
// Uso de try-catch para manejo de excepciones

try {
    // Intentamos ejecutar código que podría causar una excepción
    $dividir = 10 / 0;  // División por cero, generará una excepción
} catch (Exception $e) {
    // Capturamos la excepción y mostramos el mensaje
    echo 'Excepción capturada: ', $e->getMessage(), "\n";
}
?>
