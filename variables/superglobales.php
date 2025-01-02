<?php
// Uso de superglobales en PHP

// $_GET: Obtener datos desde la URL (usualmente con un formulario o enlace)
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    echo "Nombre recibido via GET: $nombre<br>";
} else {
    echo "No se recibió ningún nombre via GET.<br>";
}

// $_POST: Obtener datos enviados por método POST (por ejemplo, desde un formulario)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        echo "Correo recibido via POST: $email<br>";
    }
}

// $_SESSION: Usar sesiones para almacenar datos temporales
session_start();
if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = "Juan Pérez";
    echo "Usuario almacenado en sesión: " . $_SESSION['usuario'] . "<br>";
} else {
    echo "Usuario desde sesión: " . $_SESSION['usuario'] . "<br>";
}

// $_COOKIE: Usar cookies para almacenar información persistente
if (!isset($_COOKIE['usuario_cookie'])) {
    setcookie('usuario_cookie', 'Carlos', time() + 3600);  // Expira en 1 hora
    echo "Cookie 'usuario_cookie' establecida<br>";
} else {
    echo "Cookie 'usuario_cookie': " . $_COOKIE['usuario_cookie'] . "<br>";
}
?>
