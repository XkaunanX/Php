<?php
// Funciones con un número variable de parámetros

// Definir una función variádica que acepta múltiples parámetros
function sumar() {
    $suma = 0;
    foreach (func_get_args() as $arg) {
        $suma += $arg;
    }
    return $suma;
}

// Llamar a la función con diferentes números de parámetros
echo "La suma es: " . sumar(1, 2, 3, 4, 5) . "<br>";
echo "La suma es: " . sumar(10, 20) . "<br>";
?>
