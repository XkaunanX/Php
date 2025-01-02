<?php
// Conexión a base de datos MySQL utilizando mysqli

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mi_base_de_datos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}
echo "Conexión exitosa a la base de datos MySQL";

// Cerrar la conexión
$conn->close();
?>
