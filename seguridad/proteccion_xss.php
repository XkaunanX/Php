<?php
// Supongamos que recibimos una entrada de usuario en un formulario
$comentario = "<script>alert('XSS')</script> ¡Hola Mundo!";

// Sanitizar la entrada para evitar XSS
$comentario_sanitizado = htmlspecialchars($comentario, ENT_QUOTES, 'UTF-8');

// Mostrar el comentario de forma segura
echo 'Comentario: ' . $comentario_sanitizado;
?>
