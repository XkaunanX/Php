<?php
// Funciones recursivas en PHP

// Función recursiva para calcular el factorial de un número
function factorial($numero) {
    if ($numero <= 1) {
        return 1;
    } else {
        return $numero * factorial($numero - 1);
    }
}

// Llamar a la función recursiva
echo "El factorial de 5 es: " . factorial(5) . "<br>";
?>
