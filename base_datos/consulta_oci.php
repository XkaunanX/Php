<?php
// Conexión a bases de datos Oracle con OCI8

// Conexión a la base de datos Oracle
$conn = oci_connect('usuario', 'contraseña', 'localhost/XE'); // usuario, contraseña, SID o nombre de servicio

// Verificar la conexión
if (!$conn) {
    $m = oci_error();
    echo "Error de conexión: " . $m['message'];
    exit;
} else {
    echo "Conexión exitosa a la base de datos Oracle";
}

// Consulta SQL
$query = "SELECT id, nombre, email FROM usuarios";
$stid = oci_parse($conn, $query);
oci_execute($stid);

// Mostrar los resultados
while ($row = oci_fetch_assoc($stid)) {
    echo "ID: " . $row['ID'] . " - Nombre: " . $row['NOMBRE'] . " - Email: " . $row['EMAIL'] . "<br>";
}

// Cerrar la conexión
oci_free_statement($stid);
oci_close($conn);
?>
