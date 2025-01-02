<?php
// Arreglos multidimensionales en PHP

// Arreglo bidimensional
$productos = array(
    array("id" => 1, "nombre" => "Producto A", "precio" => 100),
    array("id" => 2, "nombre" => "Producto B", "precio" => 150),
    array("id" => 3, "nombre" => "Producto C", "precio" => 200)
);

// Acceder a elementos del arreglo multidimensional
echo "Nombre del primer producto: " . $productos[0]["nombre"] . "<br>";  // Producto A
echo "Precio del segundo producto: " . $productos[1]["precio"] . "<br>";  // 150
?>
