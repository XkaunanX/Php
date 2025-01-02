<?php
// Funciones anónimas y callbacks en PHP

// Definir una función anónima
$saludar = function($nombre) {
    echo "Hola, " . $nombre . "!<br>";
};

// Llamar a la función anónima
$saludar("Carlos");

// Usar la función anónima como callback en otra función
function ejecutarSaludo($callback) {
    $callback("Pedro");
}

// Pasar la función anónima como parámetro
ejecutarSaludo($saludar);
?>
