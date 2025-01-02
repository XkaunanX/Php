<?php
// Configuración para indicar que la respuesta será en formato JSON
header('Content-Type: application/json');

// Datos a retornar en la API
$datos = array(
    'status' => 'success',
    'message' => 'API funcionando correctamente',
    'data' => array(
        'id' => 1,
        'nombre' => 'Juan',
        'email' => 'juan@example.com'
    )
);

// Convertir los datos a formato JSON y devolverlos
echo json_encode($datos);
?>
