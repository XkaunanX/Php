<?php
// Iniciar la sesión
session_start();

// Almacenar datos en la sesión
$_SESSION['usuario'] = 'Juan Perez';
$_SESSION['email'] = 'juan@example.com';

// Mostrar datos almacenados en la sesión
echo 'Usuario: ' . $_SESSION['usuario'] . '<br>';
echo 'Correo electrónico: ' . $_SESSION['email'] . '<br>';

// Verificar si la sesión está activa
if (isset($_SESSION['usuario'])) {
    echo 'La sesión está activa.';
} else {
    echo 'No hay sesión activa.';
}
?>
