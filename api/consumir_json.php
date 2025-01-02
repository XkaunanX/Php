<?php
// Ejemplo de datos JSON
$json_data = '{"id": 1, "nombre": "Juan", "email": "juan@example.com"}';

// Decodificar los datos JSON
$datos = json_decode($json_data, true);

// Acceder a los datos decodificados
echo 'ID: ' . $datos['id'] . '<br>';
echo 'Nombre: ' . $datos['nombre'] . '<br>';
echo 'Email: ' . $datos['email'] . '<br>';

// Crear un arreglo PHP para convertirlo a JSON
$arreglo = array(
    'status' => 'success',
    'data' => $datos
);

// Convertir el arreglo a formato JSON
$json_output = json_encode($arreglo);

// Mostrar el JSON resultante
echo 'Respuesta en JSON: ' . $json_output;
?>
