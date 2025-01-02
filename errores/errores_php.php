<?php
// Manejo de errores en PHP utilizando error_reporting

// Activar reporte de todos los errores (excepto los avisos de nivel E_NOTICE)
error_reporting(E_ALL);

// Dividir por cero para generar un error
$resultado = 10 / 0; // Esto genera una advertencia (warning), pero no detiene la ejecución

// Mostramos un mensaje indicando que el script sigue ejecutándose
echo "El script continúa ejecutándose a pesar del error.\n";
?>
