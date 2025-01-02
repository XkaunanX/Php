<?php
// URL de la API externa que vamos a consumir
$url = 'https://api.example.com/data';

// Inicializar cURL
$ch = curl_init();

// Configurar opciones de cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

// Ejecutar la solicitud cURL
$response = curl_exec($ch);

// Verificar si hubo un error en la solicitud
if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
} else {
    // Mostrar la respuesta obtenida de la API
    echo 'Respuesta de la API: ' . $response;
}

// Cerrar la conexión cURL
curl_close($ch);
?>
