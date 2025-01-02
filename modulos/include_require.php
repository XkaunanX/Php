<?php
// Uso de include, require, include_once y require_once

// include - Si no encuentra el archivo, emite una advertencia pero sigue ejecutando el script
include 'archivo_inexistente.php';

// require - Si no encuentra el archivo, emite un error fatal y detiene la ejecución
// require 'archivo_inexistente.php'; // Descomentar para probar el error fatal

// include_once - Incluye el archivo solo una vez, aunque sea llamado múltiples veces
include_once 'archivo_inexistente.php';

// require_once - Al igual que include_once, incluye el archivo solo una vez
require_once 'archivo_inexistente.php';
?>
