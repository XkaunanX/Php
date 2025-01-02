<?php
// Tipos de datos en PHP

// Entero
$numero = 10;
echo "Número entero: $numero<br>";

// Flotante
$precio = 19.99;
echo "Precio: $precio<br>";

// Cadena
$mensaje = "Hola Mundo";
echo "Mensaje: $mensaje<br>";

// Booleano
$activo = true;
echo "Activo: " . ($activo ? "Sí" : "No") . "<br>";

// Arreglo
$colores = array("rojo", "verde", "azul");
echo "Primer color: " . $colores[0] . "<br>";

// Objeto
class Persona {
    public $nombre;
    public $edad;
}

$persona = new Persona();
$persona->nombre = "Carlos";
$persona->edad = 30;
echo "Nombre de la persona: " . $persona->nombre . ", Edad: " . $persona->edad . "<br>";

// NULL
$variable_nula = NULL;
echo "Variable nula: " . var_dump($variable_nula) . "<br>";
?>
