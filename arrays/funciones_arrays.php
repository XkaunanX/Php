<?php
// Métodos útiles de arreglos en PHP (array_map, array_filter)

// Función array_map
$numeros = array(1, 2, 3, 4, 5);
$cuadrados = array_map(function($numero) {
    return $numero * $numero;
}, $numeros);

echo "Cuadrados: " . implode(", ", $cuadrados) . "<br>";  // 1, 4, 9, 16, 25

// Función array_filter
$numeros = array(1, 2, 3, 4, 5, 6);
$pares = array_filter($numeros, function($numero) {
    return $numero % 2 == 0;
});

echo "Números pares: " . implode(", ", $pares) . "<br>";  // 2, 4, 6
?>
