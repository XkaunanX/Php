<?php
// Sanitización de una cadena de texto
$usuario = "<script>alert('hack');</script>";
$usuario_sanitizado = filter_var($usuario, FILTER_SANITIZE_STRING);
echo 'Usuario sanitizado: ' . $usuario_sanitizado . '<br>';

// Validación de una dirección de correo electrónico
$email = 'juan@example.com';
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'Correo electrónico válido: ' . $email . '<br>';
} else {
    echo 'Correo electrónico no válido.<br>';
}

// Sanitización de URL
$url = 'http://example.com';
$url_sanitizada = filter_var($url, FILTER_SANITIZE_URL);
echo 'URL sanitizada: ' . $url_sanitizada . '<br>';
?>
