<?php
// Iniciar la sesión
session_start();

// Regenerar el ID de sesión para evitar fijación de sesión
session_regenerate_id(true);

// Establecer un tiempo de expiración para la sesión (30 minutos)
$expiracion = 30 * 60;  // 30 minutos en segundos
if (isset($_SESSION['ultimo_acceso']) && (time() - $_SESSION['ultimo_acceso'] > $expiracion)) {
    // Si el tiempo de expiración ha pasado, destruir la sesión
    session_unset();
    session_destroy();
    echo 'La sesión ha expirado.';
} else {
    // Actualizar el tiempo de acceso
    $_SESSION['ultimo_acceso'] = time();
    echo 'La sesión sigue activa.';
}

// Almacenar información de sesión adicional
$_SESSION['usuario'] = 'Maria Lopez';
$_SESSION['rol'] = 'administrador';

// Mostrar la información de la sesión
echo '<br>Usuario: ' . $_SESSION['usuario'];
echo '<br>Rol: ' . $_SESSION['rol'];
?>
