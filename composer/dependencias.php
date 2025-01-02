<?php
// Para manejar las dependencias con Composer, puedes usar estos comandos:

// 1. Instalar una librería específica, por ejemplo, Guzzle HTTP Client:
$ composer require guzzlehttp/guzzle

// Esto descargará la librería y la añadirá a composer.json.

// 2. Ver todas las dependencias instaladas:
$ composer show

// 3. Actualizar todas las dependencias a su última versión compatible según el archivo composer.json:
$ composer update

// 4. Eliminar una dependencia:
$ composer remove guzzlehttp/guzzle

// 5. Verificar si las dependencias están instaladas correctamente:
$ composer check-platform-reqs

// 6. Para ejecutar el proyecto y cargar las dependencias en tu código PHP, usa el autoload de Composer:
require 'vendor/autoload.php';

// Ahora puedes utilizar cualquier librería instalada, como Guzzle:
use GuzzleHttp\Client;

// Crear una instancia de Guzzle
$client = new Client();

// Hacer una solicitud GET
$response = $client->request('GET', 'https://api.example.com');

// Mostrar la respuesta de la API
echo $response->getBody();
