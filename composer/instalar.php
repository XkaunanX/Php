<?php
// Composer es una herramienta de gestión de dependencias en PHP.
// Para instalar Composer, sigue estos pasos desde la línea de comandos:

// 1. Descarga Composer (instalador de Composer).
// Para sistemas basados en Unix/Linux/Mac:
$ curl -sS https://getcomposer.org/installer | php

// 2. Mueve Composer a un directorio accesible globalmente.
// Para sistemas basados en Unix/Linux/Mac:
$ sudo mv composer.phar /usr/local/bin/composer

// 3. Verifica que Composer se haya instalado correctamente ejecutando:
// $ composer --version

// Después de la instalación, puedes utilizar Composer para gestionar las dependencias de tu proyecto.

// Para crear un archivo composer.json, que es donde se definen las dependencias:

// 1. Inicializa Composer en tu proyecto:
$ composer init

// Composer te preguntará por el nombre del proyecto, descripción, etc. Luego generará el archivo composer.json.

// 2. Instala dependencias (por ejemplo, instalar Guzzle para hacer solicitudes HTTP):
$ composer require guzzlehttp/guzzle

// Composer descargará e instalará Guzzle y sus dependencias. El archivo composer.json se actualizará automáticamente.

// 3. Para cargar las dependencias en tu código PHP:
require 'vendor/autoload.php';

// Ahora puedes usar Guzzle en tu proyecto.
