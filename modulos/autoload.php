<?php
// Autoloading de clases en PHP

// Función de autoload personalizada
function autoload($className) {
    include_once 'clases/' . $className . '.php';
}

// Registrar la función de autoload
spl_autoload_register('autoload');

// Crear un objeto de la clase 'MiClase' sin necesidad de incluir manualmente el archivo
$obj = new MiClase();
$obj->saludar(); // Suponiendo que la clase MiClase existe en el directorio 'clases'
?>
